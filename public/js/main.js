// Category toggler
let categoriesItems = document.querySelectorAll('.step-category__nav-item');
let categoriesLists = document.querySelectorAll('.step-category-list');
let count = 0;
let productCount = 0;
let remainingCount = 200;

const toggleCategory = function () {
    for (const categoryItem of categoriesItems) {
        categoryItem.addEventListener('click', function (e) {
            let categoryNumber = this.getAttribute('data-category');

            for (const categoryItem of categoriesItems) {
                categoryItem.classList.remove('step-category__nav-item--active');
            }
            categoryItem.classList.add('step-category__nav-item--active');

            for (const categoryList of categoriesLists) {
                if (categoryList.getAttribute('data-category-list') == categoryNumber) {
                    categoryList.classList.add('step-category-list--active');
                } else {
                    categoryList.classList.remove('step-category-list--active');
                }
            }
        })
    }
}

// Add/Remove product with checkbox
const toggleProduct = function () {
    let tableBody = $('.data-table tbody');

    let productCategory = $(this).closest('.step-category-list').attr('data-category');
    let productName = $(this).closest('label').text();
    let productId = $(this).find('label').attr('for');

    

    let tableRow = `<tr
    class="data-table__row data-table__row--color-2 data-table__row--radius-top" data-row-id="${productId}">
    <td class="data-table__column data-table__column-category" data-column="category">
        ${productCategory}</td>
    <td class="data-table__column data-table__column-item"
        data-column="item">${productName}</td>
    <td class="data-table__column data-table__column-input data-table__column data-table__column-input--products"
        data-column="input-products">
        <input type="text"  id="input-products"
            class="has-custom-focus" value="" placeholder="0"
             maxlength="3">
    </td>

    <td class="data-table__column data-table__column-amount" style="display: none;"><div></div></td>
    <td class="data-table__column data-table__column-percentage" style="display: none;"><div></div></td>

    <td class="data-table__column data-table__column-input data-table__column-input--percentage"
        data-column="input-percentage"><input type="text"
            id="input-percentage" class="has-custom-focus" value=""
            placeholder="0%"  maxlength="3">
    </td>
    <td class="data-table__column data-table__column-actions">
        <div class="data-table__action data-table__action-edit" data-action="edit" style="display:none;">
            <img src="/images/edit.png" alt="edit">
            <a>Edit</a>
        </div>
        <div class="data-table__action data-table__action-save"
            data-action="save">
            <img src="/images/save.png" alt="save">
            <a>Save</a>
        </div> |
        
        <div class="data-table__action data-table__action-delete"
            data-action="delete">
            <img src="/images/trash.png" alt="delete"></img>
        </div>
    </td>
</tr>`;

    if ($(this).find('input').prop('checked')) {
        tableBody.append(tableRow);
       
        
    } else {
        $(`[data-row-id="${productId}"]`).remove();
        
        
    }
    
}

// Save product
const saveProduct = function () {

    // let type = 
    // let tableBody = $('.data-table tbody');
    let productCountLabel = $('.products-remaining__amount');
    // let productCountLabelOut = $('.products-remaining__amount_out');

    let productName = $(this).closest('label').text();
    let productId = $(this).find('label').attr('for');

    let product = $(this).closest('.data-table__row');
    let productsAmount = product.find('[data-column="input-products"] input').val();
    let productPercentage = product.find('[data-column="input-percentage"] input').val();
    let convertedProductPercentage = productPercentage.replace(/\D+/g, '');

    let productAmountColumn = product.find('.data-table__column-amount');
    let productPercnetageColumn = product.find('.data-table__column-percentage');

    productsAmount == '' ? productAmountColumn.find('div').text('0 Products') : productAmountColumn.find('div').text(`${productsAmount} Products`);
    productsAmount == '' ? productPercnetageColumn.find('div').text('0%') : productPercnetageColumn.find('div').text(`${convertedProductPercentage}%`);


    
    
    // productCount = productCount + productsAmount;
    // if(product.attr("edited") != "true"){
    if(productsAmount == "" || productsAmount == null || productsAmount < 0 ){
        productsAmount = 0;
    }
    // alert(productsAmount)
    remainingCount = remainingCount - parseInt(productsAmount);
    if(remainingCount > -1 ){
        product.removeClass('data-table__row--color-2').addClass('data-table__row--color-3');
        product.find('[data-column="input-products"]').hide();
        product.find('[data-column="input-percentage"]').hide();

        product.find('[data-action="edit"]').show();
        product.find('[data-action="save"]').hide();
        productAmountColumn.show();
        productPercnetageColumn.show();

        let productCategory = $(this).closest("tr").find(".data-table__column-category").text();
        let productType = $(this).closest("tr").find(".data-table__column-item").text();
        let noOfProducts = $(this).closest("tr").find(".data-table__column-amount").text();
        let profitMargin = $(this).closest("tr").find(".data-table__column-percentage").text();

        // alert(productCategory)
        // alert(productType)
        // alert(noOfProducts)
        // alert(profitMargin)
        // alert(productType)

        // let hiddenVal = `<input type="hidden" name="products[product]" id="${productType}" value="${$.trim(productCategory)}, ${$.trim(productType)}, ${$.trim(productsAmount)}, ${$.trim(profitMargin)}">`;
        // let hiddenVal1 = `<input type="hidden" name="products[][productPrice]" id="${productsAmount}" value="${productsAmount}">`;
        

        let hiddenVal = `<div class="__product-data"><input type="hidden" name="products[${count}][productCategory]" id="${productCategory}" value="${$.trim(productCategory)}">
                        <input type="hidden" name="products[${count}][productType]" id="${productType}" value="${$.trim(productType)}">    
                        <input type="hidden" name="products[${count}][noOfProducts]" id="${noOfProducts}" value="${$.trim(noOfProducts)}">
                        <input type="hidden" name="products[${count}][profitMargin]" id="${profitMargin}" value="${$.trim(profitMargin)}">
                        </div>
        
        `;
        
        $(hiddenVal).appendTo(this.closest("tr"));
        count = count + 1;
        console.log(product.find('[data-action="edit"]'));
        productCountLabel.html(remainingCount+"/200");
    }else{
        remainingCount = remainingCount + parseInt(productsAmount);
        alert("Number of Products Exceed!!!")
    }

        // remainingCount = 200 - productCount;
        // productCountLabelOut.html(remainingCount);
    
    
}

// Edit product
const editProduct = function () {
    // alert("editing")
    let product = $(this).closest('.data-table__row');
    let productAmountColumn = product.find('.data-table__column-amount');
    let productPercnetageColumn = product.find('.data-table__column-percentage');
    let productsAmount = product.find('[data-column="input-products"] input').val();
    let productCountLabel = $('.products-remaining__amount');


    product.removeClass('data-table__row--color-3').addClass('data-table__row--color-2');
    product.find('[data-column="input-products"]').show();
    product.find('[data-column="input-percentage"]').show();

    product.find('[data-action="edit"]').hide();
    product.find('[data-action="save"]').show();
    productAmountColumn.hide();
    productPercnetageColumn.hide();
    $(this).closest("tr").find(".__product-data").remove();
    product.attr("edited", "true");
    // alert(productsAmount)
    if(productsAmount == "" || productsAmount == null || productsAmount < 0 ){
        productsAmount = 0;
    }
    remainingCount = remainingCount + parseInt(productsAmount);
    productCountLabel.html(remainingCount+"/200");
    


}

// Delete product
const deleteProduct = function () {
    let productCountLabel = $('.products-remaining__amount');
    // let productCountLabelOut = $('.products-remaining__amount_out');
    // let productRemaining = $('.products-remaining__amount_out').html();
    let product = $(this).closest('.data-table__row');
    let productName = product.attr('data-row-id');
    let productsAmount = product.find('[data-column="input-products"] input').val();

    productName = productName.replace(/\s/g, '');

    let checkbox = $('.step-category-item__label').find(`input[id="${productName}"]`);
    console.log(checkbox)

    checkbox.prop('checked', false);
    product.remove();
    $(this).closest("tr").find(".__product-data").remove();
    count = count - 1;
    // if(productCount > 0){
    //     productCount = productCount + 1;
    // }
    if(productsAmount == "" || productsAmount == null || productsAmount < 0 ){
        productsAmount = 0;
    }
    remainingCount = remainingCount + parseInt(productsAmount);

    // remainingCount = parseInt(productRemaining) + 1;
    // console.log(productRemaining);
    if(remainingCount > -1){
        productCountLabel.html(remainingCount+"/200");
    }
    // productCountLabelOut.html(remainingCount);
}

const toggleLabel = function () {
    setTimeout(function() {
        if ($('.data-table__row').length > 0) {
            $('.step-category__label').hide();
        } else {
            $('.step-category__label').show();
        }
    })
}



const init = function () {
    toggleCategory();
    $('.step-category-item__label').on('change', toggleProduct);
    $(document).on('click', '[data-action="save"]', saveProduct);
    $(document).on('click', '[data-action="edit"]', editProduct);
    $(document).on('click', '[data-action="delete"]', deleteProduct);
    $(document).on('click', toggleLabel);
}

init();