<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roheda Group</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-lG+2NcAVN01X+JoVhjoKtXz/0D2FgOm0sz6P5Zy4X4IzBp4yBoTb4z9m7zMQGInP" crossorigin="anonymous">
    <style>
        .bg-hero {
            background-size: cover;
            background-position: center;
            height: 90vh;
            animation: slideBackground 10s infinite alternate;
        }

        @keyframes slideBackground {
            0% {
                background-image: url('images/plaza-oleos.jpg');
            }
            50% {
                background-image: url('images/havenwood.jpg');
            }
            100% {
                background-image: url('images/house.jpg');
            }
        }

        html {
            scroll-behavior: smooth;
        }
        .logo {
            height: 50px; /* Adjust the height as needed */
        }

        /* Zoom animation */
        .project-title {
            transition: transform 0.3s;
        }

        .project-title:hover {
            transform: scale(1.1);
        }

        .bg-transparent {
    background-color: rgba(255, 255, 255, 0.5); /* ubah opacity sesuai kebutuhan */
        }

        #projectModal .bg-white {
            display: flex;
        }

        #projectModal img {
            max-width: 100%;
            height: auto;
        }

        #projectModal .relative {
            position: relative;
        }

        #closeModal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        #closeModal:focus {
            outline: none;
        }

    </style>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow-md fixed w-full z-10" id="header">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#home" class="text-2xl font-bold"><img src="images/roheda-removebg-preview.png" alt="Roheda Group Logo" class="logo"></a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="#home" class="text-gray-700 hover:text-gray-900 translate" data-en="Home" data-id="Beranda">Home</a></li>
                <li><a href="#about" class="text-gray-700 hover:text-gray-900 translate" data-en="About" data-id="Tentang">About</a></li>
                <li><a href="#projects" class="text-gray-700 hover:text-gray-900 translate" data-en="Projects" data-id="Proyek">Projects</a></li>
                <li><a href="#contact" class="text-gray-700 hover:text-gray-900 translate" data-en="Contact" data-id="Kontak">Contact</a></li>
            </ul>
        </nav>
        <div>
            <button id="to-en" class="text-gray-700 hover:text-gray-900">EN</button>
            <button id="to-id" class="text-gray-700 hover:text-gray-900 ml-2">ID</button>
        </div>
    </div>
</header>


    <!-- Hero Section -->
    <section id="home" class="bg-hero flex items-center justify-center text-center text-white">
        <div class="container mx-auto">
            <h1 class="text-5xl font-bold mb-4 animate__animated animate__flash">Welcome to Roheda Group</h1>
            <p class="text-xl animate__animated animate__flash">Discover the perfect blend of luxury and modern living in the heart of Jakarta.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container mx-auto px-4 py-20 text-center">
        <div class="mb-12">
            <h2 class="text-4xl font-bold mb-4">About Us</h2>
            <p class="text-gray-600 mb-4">Roheda Group established a new paradigm in regional estate development. 
                The firm's core objective is developing sentinel building through an uncompromising dedication to architecture and craft.
                With this purity of vision in mind, Roheda Group seeks to develop an elegant and timeless body of work by profoundly improving upon the build environment.</p>
            <p class="text-gray-600 mb-4">Roheda Group has built 4 commercial office buildings, 5 apartments, 6 residential conversions and more than 100 houses.
                Roheda Group currently employs an upward of 100 professionals across project management, cost controllers, financial analysts, accounting, administration, and various construction personnels.</p>
            <p class="text-gray-600">Roheda Group's technical capabilities in architecture, planning, and construction management enables it to build projects to exceptional quality and design, while mitigating risks due to its extensive experience in cost and schedule management.
                The Roheda Group's depth of expertise allows it to deliver sustainable returns to all shareholders</p>
        </div>
    </section>
<!-- Projects Section -->
<section id="projects" class="container mx-auto px-4 py-20 text-center">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-4">Our Projects</h2>
        <p class="text-gray-600">Explore our exclusive projects that define luxury living.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="Plaza Oleos" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Plaza Oleos is the first office space to offer the biggest building floorplate in Jalan TB Simatupang, South Jakarta." data-image="images/commercial.jpg">Plaza Oleos</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="One Wolter Place" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">One Wolter Place</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="Complex Jervois" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">Complex Jervois</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="Complex Teladan" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">Complex Teladan</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="Kemang Satoe Residence" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">Kemang Satoe Residence</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="Kemang 1D" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">Kemang 1D</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="The Villas Kebagusan" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">The Villas Kebagusan</h3>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/commercial.jpg" alt="The Briz" class="w-full">
            <div class="p-4">
                <h3 class="text-2xl font-bold mb-2 project-title" data-description="Short description of the project." data-image="images/commercial.jpg">The Briz</h3>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="projectModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg overflow-hidden max-w-3xl w-full flex">
        <img id="modalImage" src="" alt="Project Image" class="w-1/2">
        <div class="p-4 w-1/2 relative">
            <button id="closeModal" class="absolute top-2 right-2 text-gray-700">&times;</button>
            <h3 id="modalTitle" class="text-2xl font-bold mb-2"></h3>
            <p id="modalDescription" class="text-gray-600"></p>
        </div>
    </div>
</div>


<!-- Contact Section -->
<section id="contact" class="container mx-auto px-4 py-20 bg-gray-200">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-4">Contact Us</h2>
        <p class="text-gray-600 mb-8">Get in touch with us for more information about our projects and offerings.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Form Section -->
            <div>
                <form class="max-w-lg mx-auto" action="send_mail.php" method="post">
                    <div class="mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                            Name
                        </label>
                        <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-name" name="name" type="text" placeholder="Your Name" required>
                    </div>
                    <div class="mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-email" name="email" type="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
                            Message
                        </label>
                        <textarea class="appearance-none block w-full bg-white text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-message" name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="text-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- WhatsApp Contact Section -->
            <div class="flex flex-col justify-center">
                <a href="https://wa.me/628129196458" target="_blank" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">
                    <i class="fab fa-whatsapp mr-2"></i> Contact Yana on WhatsApp
                </a>
                <a href="https://wa.me/6281584019866" target="_blank" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">
                    <i class="fab fa-whatsapp mr-2"></i> Contact Yetti on WhatsApp
                </a>
                <a href="https://wa.me/6281617432410" target="_blank" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">
                    <i class="fab fa-whatsapp mr-2"></i> Contact Davy on WhatsApp
                </a>
                <a href="https://wa.me/62816933580" target="_blank" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fab fa-whatsapp mr-2"></i> Contact Andriana on WhatsApp
                </a>
            </div>
            
        </div>
    </div>
</section>



    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/3 mb-6 lg:mb-0 text-center">
                    <h3 class="text-lg font-bold mb-4">About Roheda Group</h3>
                    <p>Roheda Group established a new paradigm in regional estate development. The firm's core objective is developing sentinel building through an uncompromising dedication to architecture and craft.
                        With this purity of vision in mind.</p>
                        <br>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="text-gray-400">
                        <a href="#home" class="hover:text-white">Home</a>
                        <a href="#about" class="hover:text-white">About</a>
                        <a href="#projects" class="hover:text-white">Projects</a>
                        <a href="#contact" class="hover:text-white">Contact</a>
                    </ul>
                </div>
                <div class="w-full lg:w-1/3 mb-6 lg:mb-0">
                    <h3 class="text-lg font-bold mb-4 text-center">Location Roheda Group</h3>
                    <div class="w-full h-64">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7153716926887!2d106.82645180324705!3d-6.301080611267483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edf83c10acc5%3A0x7f8e7874eae04067!2sJervois%20Park!5e0!3m2!1sid!2sid!4v1718176158967!5m2!1sid!2sid" 
                            width="100%" 
                            height="80%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 text-center">
                    <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                    <p class="text-gray-400">Complex Jervois Kav.8, Jl. Kebagusan 1 No. 51B, Pasar Minggu, Jakarta Selatan</p>
                    <p class="text-gray-400">Email: <a href="mailto:inquiry@rohedagroup.com" class="hover:text-white">inquiry@rohedagroup.com</a></p>
                    <p class="text-gray-400">Phone: <a href="tel:+622122780170" class="hover:text-white">+62 21 2278 0170</a></p>
                </div>
            </div>
        </div>
    </footer>
    
    

</body>

<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        var header = document.getElementById("header");
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            header.classList.add("bg-transparent");
        } else {
            header.classList.remove("bg-transparent");
        }
    }
</script>

<script>
    document.getElementById('to-en').addEventListener('click', function() {
        document.querySelectorAll('.translate').forEach(function(element) {
            element.textContent = element.getAttribute('data-en');
        });
    });

    document.getElementById('to-id').addEventListener('click', function() {
        document.querySelectorAll('.translate').forEach(function(element) {
            element.textContent = element.getAttribute('data-id');
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const projectTitles = document.querySelectorAll('.project-title');
    const modal = document.getElementById('projectModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const closeModal = document.getElementById('closeModal');

    projectTitles.forEach(title => {
        title.addEventListener('click', () => {
            const description = title.getAttribute('data-description');
            const image = title.getAttribute('data-image');
            const text = title.textContent;

            modalImage.src = image;
            modalTitle.textContent = text;
            modalDescription.textContent = description;

            modal.classList.remove('hidden');
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
});
</script>

</html>

