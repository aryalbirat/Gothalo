<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
                /* Reset default margin and padding */
        body, h1, p {
            margin: 0;
            padding: 0;
        }
        
        /* Set background color and text color */
            body {
                background-image: url('about_bc.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;
                color: #333;
                font-family:URW Chancery L, cursive;
            }

        
        /* Center the content */
        h1,section {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #f5e9e9;
            opacity: 80%;
            border-radius: 10px;
        }
        img{
            width:300px;
            height: 350px;
            float: left;
        }
        
        /* Style the header */
        h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
            color: #1a3a69;
            padding:5px;
            width: 230px;
            
        }
        h2{
            font-size: 20px;
            color: #b92b37;
        }
        
        /* Style the paragraphs */
        p {
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        
        
        /* Add space between paragraphs for better readability */
        p + p {
            margin-top: 20px;
        }
        
        /* Style links */
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        /* Responsive design for smaller screens */
        @media (max-width: 600px) {
            section {
            padding: 20px;
            }
        }
        
    </style>
</head>
<body>
    <?php include'nav.php' ?>
    <h1>ABOUT US</h1>
  <section>
    <h2>Introducing Gothalo: Revolutionizing the Rental Experience</h2>
    <p> <img src="GOTHALO NOBG.png" alt="LOGO">
        Welcome to the future of rental solutions with Gothalo, a groundbreaking application 
        designed to transform the way we find and secure rental properties. In the fast-paced world of 
        metropolitan and sub-metropolitan areas, where housing scarcity and overwhelming choices 
        have become the norm, Gothalo emerges as the beacon of convenience, transparency, and 
        efficiency.
        Gothalo stands as a testament to our unwavering commitment to addressing the pressing 
        housing problem by providing a seamless and effortless house rental solution. With its user friendly interface, innovative features, and dedication to user satisfaction, Gothalo is poised 
        to revolutionize the rental market, making the entire process a breeze for tenants and 
        landlords alike.
    </p><p>
        Imagine a world where finding the perfect rental property is no longer a time-consuming and
        frustrating endeavor. With Gothalo, that vision becomes a reality. Our intuitive search filters 
        allow users to narrow down their options based on location, price range, amenities, and 
        property type, ensuring that every search yields tailored results that match their unique 
        preferences and needs.
        But Gothalo offers much more than a simple search engine. It fosters direct communication 
        between tenants and landlords, eliminating the need for intermediaries and promoting a 
        transparent and trust-based relationship. Say goodbye to endless phone calls and unanswered 
        emails - Gothalo provides a seamless platform for tenants and landlords to connect, discuss 
        details, and finalize rental agreements with ease.</p><p>

        Security and peace of mind are paramount to us at Gothalo. Our integrated payment system 
        ensures that every transaction is secure and hassle-free, safeguarding the interests of both 
        tenants and landlords. Additionally, our rating and review system empowers the community 
        to share their experiences, ensuring that the platform thrives on a foundation of genuine 
        feedback and trustworthiness.
        Gothalo is not just an application; it is a catalyst for change in the rental market. By 
        simplifying the rental process, enhancing transparency, and fostering a sense of community,
        we aim to create a harmonious and efficient ecosystem where tenants find their dream homes 
        and landlords seamlessly manage their properties.
    </p><p>
        Join us on this transformative journey as we redefine the rental experience. Whether you're a 
        tenant in search of your next abode or a landlord seeking reliable tenants, Gothalo is here to 
        guide and empower you every step of the way. Welcome to a world where finding the perfect 
        rental property is effortless, secure, and enjoyable. Welcome to Gothalo, where rental dreams 
        become a reality.</p>
    </section>
</body>
</html>