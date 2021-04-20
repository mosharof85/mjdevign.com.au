var payment = (function () {

    // Set your publishable key: remember to change this to your live publishable key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    var stripe = null;
    var card = null;

    var clientSecret = null;
    var paymentIntentId = null;

    var stripe_tries = 0;

    var m_form = null;

    var card_el;

    var api_key;
    var _token;
    
    var transaction_id;
    var receipt_url;
    var email;
    
    var c_stripe_el;
	var c_stripe_error;

    


    //DOM cache
    var webform = document.getElementById('webform');
    var landingform  = document.getElementById('landingform');
    var dropshippingform  = document.getElementById('dropshippingform');
    var addonsfrom  = document.getElementById('addonsform');

    
    //Event bind
    if(webform) webform.addEventListener('submit',  (ev) => _confirmStripe(ev, webform));
    if(landingform) landingform.addEventListener('submit',  (ev) => _confirmStripe(ev, landingform));
    if(dropshippingform) dropshippingform.addEventListener('submit',  (ev) => _confirmStripe(ev, dropshippingform));
    if(addonsfrom) addonsfrom.addEventListener('submit',  (ev) => _confirmStripe(ev, addonsfrom));

    //logic

    function loadStripe(){

        console.info('Starting Stripe DOM Load..');
        card_el = document.querySelector('.debit-card');

        api_key = card_el.getAttribute('api-key-data');
        _token = card_el.getAttribute('_token');
        email = card_el.getAttribute('email');
        
        transaction_id = card_el.querySelector('#transaction_id');
        receipt_url = card_el.querySelector('#receipt_url');
        
        c_stripe_el = card_el.querySelector('#card-element');
        c_stripe_error = card_el.querySelector('#card-errors');

        stripe = Stripe(api_key);
        // Set up Stripe.js and Elements to use in checkout form
        var elements = stripe.elements();
        var style = {
            base: {
                color: "#32325d",
            }
        };

        card = elements.create("card", { style: style });
        card.mount("#card-element");
    }

    function _confirmStripe(event, form){

        if(event) event.preventDefault();
        if(form) m_form = form;

        c_stripe_error.textContent = "";

        if(email == "" || !validateEmail(email)){
            c_stripe_error.style.color = "red";
            c_stripe_error.textContent = "Please provide correct information and try again";
        }

		if(!clientSecret || !paymentIntentId){

            if(!validation.validate(m_form)){
                return;
            }
            document.getElementsByClassName("LoadingHolder")[0].classList.remove("makeItHidden");

			sendStripeIntent = false;

			if(stripe_tries < 3){
				console.log('retrying stripe... '+stripe_tries+' times');
				stripe_tries++;
				_resendStripeIntent(_confirmStripe);
			}
			if(stripe_tries >= 3){
                c_stripe_error.style.color = "red";
				c_stripe_error.textContent ='Sorry, couldn\'t complete the payment. Please enter correct details.';
			}
			return false;
		}
		stripe.confirmCardPayment(clientSecret, {
			payment_method: {
				card: card,
				billing_details: {
					email: email
				}
			}
		}).then(function(result) {

			if (result.error) {
				// Show error to your customer (e.g., insufficient funds)

                c_stripe_error.style.color = "red";
				c_stripe_error.textContent = result.error.message+" Please try again properly.";

				console.log(result.error.message);
                document.getElementsByClassName("LoadingHolder")[0].classList.add("makeItHidden");

			} else {

				// The payment has been processed!
				if (result.paymentIntent.status === 'succeeded') {
					// Show a success message to your customer
					// There's a risk of the customer closing the window before callback
					// execution. Set up a webhook or plugin to listen for the
					// payment_intent.succeeded event that handles any business critical
					// post-payment actions.
					_updateStripeIntent();

				}
			}
		});
	}

	async function _updateStripeIntent(){

        var response = await fetch('/payment/update', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json;charset=utf-8',
              'accept': 'application/json'
            },
            body: JSON.stringify({_token: _token, intent_details:{
                id: paymentIntentId,
                email: email
            }})
        });

        if (response.ok) {
            let json = await response.json();
            // console.log(json);
            transaction_id.value = json.data.id;
            receipt_url.value = json.data.receipt_url
            m_form.submit();
        } else {
            console.log("HTTP-Error: " + response);
            c_stripe_error.style.color = "red";
            c_stripe_error.textContent = 'Sorry Error Occured! Try Again';
        }
    }
    
    async function _resendStripeIntent(callback){
        var response = await fetch('/payment/create', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json;charset=utf-8',
              'accept': 'application/json'
            },
            body: JSON.stringify({_token: _token, intent_details:{
                amount: order.total()
            }})
        });

        if (response.ok) {
            let json = await response.json();
            clientSecret = json.data.client_secret;
            paymentIntentId = json.data.id;

            callback();

        } else {
            console.log("HTTP-Error: " + JSON.stringify(response));
        }
    }
    
    function validateEmail(email)
    {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.match(mailformat))
        {
            return (true);
        }
        return (false);
    }

    

    return {
        load : loadStripe,
    }

})();
