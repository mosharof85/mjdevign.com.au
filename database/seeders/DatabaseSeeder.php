<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //create admin user
        DB::table('users')->insert([
            'name' => "adminuser",
            'lastname' => "adminuser",
            'phonenumber' => "+9779812121234",
            'country' => "Nepal",
            'city' => "kathmandu",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => Hash::make('adminuser'), // password
            'remember_token' => Str::random(10),
        ]);

        //create admin role
        DB::table('roles')->insert([
            'name' => 'ROLE_ADMIN',
            'description' => 'Role for accessing administration features'
        ]);

        //assign admin role to admin user
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        
        //features data array
        $features = [
            [
                "name" => "Email Template",
                "description" => "We design you an email template so that when your clients open mail from you it is displayed professionally with your own personalised brand. Learn more ",
                "image" => "mail.png",
                "price" => 99.00,
            ],
            [
                "name" => "Multilingual ",
                "description" => "We integrate a plugin that will allow your users to view your websites content in their native language based off their geolocation. Learn more ",
                "image" => "languages.png",
                "price" => 99.00,
            ],
            [
                "name" => "Content Writing",
                "description" => "Not sure what to write on your website? Leave it to us. We will professionally write up to 800 words of content based off the information you have provided us. Learn more ",
                "image" => "writing.png",
                "price" => 249.00,
            ],
            [
                "name" => "Promotional Video",
                "description" => "We create you a minute long animated promotional or explainer video that can be integrated into your website and social media. Learn more ",
                "image" => "browser.png",
                "price" => 349.00,
            ],
            [
                "name" => "Social Media Package",
                "description" => "We will set you up with a Facebook, Instagram and Twitter account with appealing banners and content. Learn more ",
                "image" => "social-media.png",
                "price" => 99.00,
            ],[
                "name" => "Live Chat",
                "description" => "Allow your audience to contact you directly when you are online with the live chat feature. It will work similarly to the one that we are using on this page. Learn more ",
                "image" => "Live Chat ",
                "price" => 99.00,
            ],
            [
                "name" => "Marketing Campaign",
                "description" => "Targeting your audience, we set you up with a marketing campaign for Google & Facebook with a $100 voucher to get started. Learn more ",
                "image" => "mail.png",
                "price" => 179.00,
            ]
        ];

        //adds features
        foreach ($features as $feature){
            DB::table('additionalfeatures')->insert([
                'featurename' => $feature['name'],
                'description' => $feature['description'],
                'image' => $feature['image'],
                'price' => $feature['price'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        //page types array
        $pagetypes = [
            [
                "name" => "About us page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "Online Bookings",
                "description" => "We will integrate an easy to manage booking system into your website. Online bookings can be used for general appointments, specific services or reservations. You can charge your client a deposit, full amount or nothing at all during the book in process and your schedule will update accordingly. Training and support included.",
                "price" => 99.00,
            ],
            [
                "name" => "Sell Products or Services",
                "description" => "we will integerate an easy to manage ecommerce platform into your website that will allow you to list products or services you offer and manage products from your admin panel",
                "price" => 99.00,
            ],
            [
                "name" => "Event Manager",
                "description" => "We will integrate a event manager platform into your website. Perfect for creating events, selling tickets and collecting RSVPs. Great for weddings, concerts, gatherings and more.",
                "price" => 99.00,
            ],
            [
                "name" => "Fourm",
                "description" => null,
                "price" => 99.00,
            ],
            [
                "name" => "Blog Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "FAQ Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "User Form Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "Custom Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "Gallery Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "Informative Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "Testimonial Page",
                "description" => null,
                "price" => null,
            ],
            [
                "name" => "Contact us page",
                "description" => null,
                "price" => null,
            ],
            
        ];

        //adds page types
        foreach ($pagetypes as $pagetype){
            DB::table('pagetypes')->insert([
                'pagetypes' => $pagetype['name'],
                'description' => $pagetype['description'],
                'price' => $pagetype['price'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        //includes array
        $includes = [
            
            [
                "name" => "Testimonials",
                "description" => null,
                "image" => null,
                "price" => null,
            ],
            [
                "name" => "User Form",
                "description" => null,
                "image" => null,
                "price" => null,
            ],
            [
                "name" => "Photo Gallary",
                "description" => null,
                "image" => null,
                "price" => null,
            ],
            [
                "name" => "Location Map",
                "description" => null,
                "image" => null,
                "price" => null,
            ],
            [
                "name" => "Newsletter Subscription",
                "description" => null,
                "image" => null,
                "price" => null,
            ],
            [
                "name" => "Links to Social Media",
                "description" => null,
                "image" => null,
                "price" => null,
            ],
            [
                "name" => "Poll Free",
                "description" => null,
                "image" => null,
                "price" => null,
            ]
            
        ];

        //adds includes
        foreach ($includes as $include){
            DB::table('includeonpages')->insert([
                'includeonpages' => $include['name'],
                'description' => $include['description'],
                'image' => $include['image'],
                'price' => $include['price'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        //addons array
        $addons = [
            [
                "name" => "Business Email Address",
                "description" => "A personalised email address with 1 year hosting & a professional template design to match your store. We also help you connect it to all of your devices. Learn more ",
                "image" => "option1.png",
                "price" => 99.00,
            ],
            [
                "name" => "Customer Account ",
                "description" => "Enable your customers to create an account on your store to view and track their orders. Alternatively, this information will be sent to them by email. Learn more ",
                "image" => "option2.png",
                "price" => 100.00,
            ],
            [
                "name" => "Marketing Campaign ",
                "description" => "We will set up a marketing campaign for Google & Facebook ads, targeting your audiences with a $100 voucher to get started. Learn more ",
                "image" => "option3.png",
                "price" => 179.00,
            ],
            [
                "name" => "Social Media Package ",
                "description" => "We will set your store up with a Facebook, Instagram and Twitter account and design appealing banners and content Learn more ",
                "image" => "option4.png",
                "price" => 130.00,
            ],
            [
                "name" => "Multilingual & Multiple Currencies ",
                "description" => "A plugin where customers can switch between currencies and automatically displays their native currency based on geolocation Learn more ",
                "image" => "option5.png",
                "price" => 199.00,
            ],
            [
                "name" => "Product Title & Description Editing",
                "description" => "Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information. Learn more ",
                "image" => "option6.png",
                "price" => 30.00,
            ],
            // [
            //     "name" => "Product Title & Description Editing X 100",
            //     "description" => "Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information. Learn more ",
            //     "image" => "option6.png",
            //     "price" => 60.00,
            // ],
            // [
            //     "name" => "Product Title & Description Editing X 150",
            //     "description" => "Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information. Learn more ",
            //     "image" => "option6.png",
            //     "price" => 90.00,
            // ],
            // [
            //     "name" => "Product Title & Description Editing X 200",
            //     "description" => "Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information. Learn more ",
            //     "image" => "option6.png",
            //     "price" => 120.00,
            // ],
            // [
            //     "name" => "Product Title & Description Editing X 400",
            //     "description" => "Product information written by suppliers can often be lengthy. We will edit content about your products with appealing & relevant information. Learn more ",
            //     "image" => "option6.png",
            //     "price" => 240.00,
            // ],
            [
                "name" => "Promotional Video",
                "description" => "A minute long appealing promotional video that can be integrated into your website and social media to help boost sales. Learn more ",
                "image" => "option7.png",
                "price" => 249.00,
            ]
        ];

        //adds addons
        foreach ($addons as $addon){
            DB::table('addons')->insert([
                'addonsname' => $addon['name'],
                'description' => $addon['description'],
                'image' => $addon['image'],
                'price' => $addon['price'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
