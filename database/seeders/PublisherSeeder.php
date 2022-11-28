<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Nightfire Publications',
            'address' => "-",
            'phone' => "-",
            'email' => "https://nightfirepublications.com/contact-us/",
            'image' => "https://i.pinimg.com/280x280_RS/c2/b5/11/c2b51121c79b7db080bf3a9dc009df4b.jpg"
        ]);

        Publisher::create([
            'name' => 'Acepub',
            'address' => "-",
            'phone' => "-",
            'email' => " info@acepub.com",
            'image' => "https://acepub.com/wp-content/uploads/2015/06/acepub-logo_updated_72.png"
        ]);

        Publisher::create([
            'name' => 'One More Chapter',
            'address' => "-",
            'phone' => "-",
            'email' => "https://www.instagram.com/onemorechapterhc/",
            'image' => "https://s28434.pcdn.co/wp-content/uploads/sites/27/2020/06/OneMoreChapter_Branding_Twitter-1024x341.jpg"
        ]);

        Publisher::create([
            'name' => 'Scribner',
            'address' => "-",
            'phone' => "-",
            'email' => "https://www.instagram.com/scribnerbooks/",
            'image' => "https://www.scribnerbooks.com/images/header-desktop-p-1080.jpeg"
        ]);

        Publisher::create([
            'name' => 'Del Rey Books',
            'address' => "-",
            'phone' => "-",
            'email' => "http://www.randomhousebooks.com",
            'image' => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Del_Rey_logo.svg/150px-Del_Rey_logo.svg.png"
        ]);

        Publisher::create([
            'name' => 'Harper Collins Publishers',
            'address' => "HarperCollins Publishers. 195 Broadway. New York, NY 10007",
            'phone' => "800-242-7737",
            'email' => "http://www.randomhousebooks.com",
            'image' => "https://cdn.shopify.com/s/files/1/0285/2821/4050/files/hcp-corporate-logo_200x50.png?v=1614768923"
        ]);

        Publisher::create([
            'name' => 'Amazon Publishing',
            'address' => "-",
            'phone' => "-",
            'email' => "globalrights@amazon.com",
            'image' => "https://d1qwyayg24w5f4.cloudfront.net/images/home/logo-apub.svg"
        ]);
    }
}
