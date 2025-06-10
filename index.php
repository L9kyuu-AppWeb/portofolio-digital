<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Full Stack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F172A',
                        secondary: '#1E293B',
                        accent: '#3B82F6',
                        'accent-hover': '#2563EB'
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .typing-effect {
            border-right: 2px solid #3B82F6;
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            50% {
                border-color: transparent;
            }

            51%,
            100% {
                border-color: #3B82F6;
            }
        }

        .skill-bar {
            height: 6px;
            background: #E5E7EB;
            border-radius: 3px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, #3B82F6, #8B5CF6);
            border-radius: 3px;
            transition: width 2s ease;
        }
    </style>
</head>

<body class="bg-primary text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-primary/90 backdrop-blur-sm z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-accent">Portfolio</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-accent transition-colors">Home</a>
                    <a href="#about" class="hover:text-accent transition-colors">About</a>
                    <a href="#skills" class="hover:text-accent transition-colors">Skills</a>
                    <a href="#education" class="hover:text-accent transition-colors">Education</a>
                    <a href="#contact" class="hover:text-accent transition-colors">Contact</a>
                </div>
                <button class="md:hidden text-white" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 gradient-bg opacity-10"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="animate-fade-in">
                <h1 class="text-5xl md:text-7xl font-bold mb-6">
                    Hi, I'm <span class="text-accent typing-effect" id="typing-text">Developer</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-300">Full Stack Developer & UI/UX Enthusiast</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="border-2 border-accent text-accent hover:bg-accent hover:text-white font-bold py-3 px-8 rounded-full transition-all duration-300">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-secondary">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">About Me</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Saya adalah seorang Full Stack Developer dengan passion dalam menciptakan solusi digital yang inovatif.
                        Dengan pengalaman lebih dari 3 tahun, saya telah mengembangkan berbagai aplikasi web dan mobile.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Saya percaya bahwa teknologi dapat mengubah dunia menjadi lebih baik, dan saya berkomitmen untuk
                        terus belajar dan berkembang dalam industri yang dinamis ini.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <span class="bg-accent/20 text-accent px-4 py-2 rounded-full">Problem Solver</span>
                        <span class="bg-accent/20 text-accent px-4 py-2 rounded-full">Team Player</span>
                        <span class="bg-accent/20 text-accent px-4 py-2 rounded-full">Quick Learner</span>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-80 h-80 bg-gradient-to-br from-accent to-purple-600 rounded-full mx-auto opacity-80"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-6xl">👨‍💻</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">Skills & Technologies</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frontend Skills -->
                <div class="bg-secondary p-6 rounded-lg card-hover">
                    <h3 class="text-xl font-bold mb-4 text-accent">Frontend</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>React.js</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Next.js</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Flutter</span>
                                <span>80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="bg-secondary p-6 rounded-lg card-hover">
                    <h3 class="text-xl font-bold mb-4 text-accent">Backend</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Node.js</span>
                                <span>88%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Python</span>
                                <span>82%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="82%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>PHP</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Database & Tools -->
                <div class="bg-secondary p-6 rounded-lg card-hover">
                    <h3 class="text-xl font-bold mb-4 text-accent">Database & Tools</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>MongoDB</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>Mysql</span>
                                <span>95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span>AA Panel</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 0%" data-width="70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-secondary">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">Riwayat Pendidikan</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Pendidikan 1 -->
                <div class="bg-primary rounded-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <div class="text-4xl">🎓</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Universitas Amikom Yogyakarta</h3>
                        <p class="text-gray-300 mb-2">S2 Informatika</p>
                        <p class="text-gray-400 text-sm mb-4">2022 - 2024</p>
                        <p class="text-gray-300 text-sm">Fokus pada pengembangan web, data science, dan kecerdasan buatan.</p>
                    </div>
                </div>

                <!-- Pendidikan 2 -->
                <div class="bg-primary rounded-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                        <div class="text-4xl">🎓</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Universitas Islam Kalimantan Banjarmasin</h3>
                        <p class="text-gray-300 mb-2">S1 Teknik Informatika</p>
                        <p class="text-gray-400 text-sm mb-4">2013 - 2017</p>
                        <p class="text-gray-300 text-sm">Aktif dalam organisasi dan pengembangan web.</p>
                    </div>
                </div>

                <!-- Pendidikan 3 -->
                <div class="bg-primary rounded-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-br from-red-500 to-pink-600 flex items-center justify-center">
                        <div class="text-4xl">🏫</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">SMKN 4 Banjarmasin</h3>
                        <p class="text-gray-300 mb-2">Jurusan RPL</p>
                        <p class="text-gray-400 text-sm mb-4">2010 - 2013</p>
                        <p class="text-gray-300 text-sm">Membangun dasar-dasar ilmu pengetahuan, teknologi dan pemrograman.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Experience Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">Experience</h2>
            <div class="max-w-4xl mx-auto">
                <div class="space-y-8">
                    <div class="bg-secondary p-6 rounded-lg card-hover">
                        <div class="flex flex-col md:flex-row justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-accent">Senior Full Stack Developer</h3>
                                <p class="text-gray-300">Buildapp</p>
                            </div>
                            <span class="text-sm text-gray-400">2020 - Sekarang</span>
                        </div>
                        <p class="text-gray-300">Memimpin tim pengembangan aplikasi web enterprise dengan teknologi modern. Bertanggung jawab dalam arsitektur sistem dan mentoring junior developer.</p>
                    </div>

                    <div class="bg-secondary p-6 rounded-lg card-hover">
                        <div class="flex flex-col md:flex-row justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-accent">Programmer Information and Communication Technology</h3>
                                <p class="text-gray-300">Universitas Sari Mulia</p>
                            </div>
                            <span class="text-sm text-gray-400">2020 - 2022</span>
                        </div>
                        <p class="text-gray-300">Mengembangkan dan maintenance berbagai aplikasi web untuk kampus. Fokus pada performance optimization dan user experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-secondary">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">Get In Touch</h2>
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold mb-6">Let's Work Together</h3>
                    <p class="text-gray-300 mb-8">Tertarik untuk berkolaborasi? Saya selalu terbuka untuk proyek-proyek menarik dan peluang kerja sama yang saling menguntungkan.</p>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center">
                                📧
                            </div>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p class="text-gray-300">developer@example.com</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center">
                                📱
                            </div>
                            <div>
                                <p class="font-semibold">Phone</p>
                                <p class="text-gray-300">+62 895-3895-71188</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center">
                                📍
                            </div>
                            <div>
                                <p class="font-semibold">Location</p>
                                <p class="text-gray-300">Banjarmasin, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form id="contact-form" class="space-y-6">
                    <div>
                        <input type="text" name="user_name" placeholder="Nama Anda" required class="w-full p-4 bg-primary border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                    </div>
                    <div>
                        <input type="email" name="user_email" placeholder="Email Anda" required class="w-full p-4 bg-primary border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors">
                    </div>
                    <div>
                        <textarea name="message" placeholder="Pesan Anda" rows="5" required class="w-full p-4 bg-primary border border-gray-600 rounded-lg focus:border-accent focus:outline-none transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit" id="submit-btn" class="w-full bg-accent hover:bg-accent-hover text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                        <span id="button-text">Kirim Pesan</span>
                        <span id="loading-text" class="hidden">Mengirim...</span>
                    </button>
                    <div id="form-message" class="hidden p-4 rounded-lg text-center"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-gray-700">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">&copy; 2025 Portfolio. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">GitHub</a>
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">LinkedIn</a>
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">Twitter</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const EMAILJS_CONFIG = {
            PUBLIC_KEY: "<?= $EMAILJS_PUBLIC_KEY ?>",
            SERVICE_ID: "<?= $EMAILJS_SERVICE_ID ?>",
            TEMPLATE_ID: "<?= $EMAILJS_TEMPLATE_ID ?>"
        };
        // Initialize EmailJS
        emailjs.init(EMAILJS_CONFIG.PUBLIC_KEY); // Ganti dengan Public Key dari EmailJS

        // Contact Form Handler
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = document.getElementById('submit-btn');
            const buttonText = document.getElementById('button-text');
            const loadingText = document.getElementById('loading-text');
            const formMessage = document.getElementById('form-message');

            // Show loading state
            buttonText.classList.add('hidden');
            loadingText.classList.remove('hidden');
            submitBtn.disabled = true;

            // Get form data
            const formData = new FormData(this);
            // Ambil waktu sekarang
            const now = new Date();
            const timeString = now.toLocaleString('id-ID', {
                day: '2-digit',
                month: 'long',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            const templateParams = {
                name: formData.get('user_name'),
                user_email: formData.get('user_email'),
                message: formData.get('message'),
                time: timeString,
                to_email: 'mail.latif09@gmail.com'
            };

            // Send email using EmailJS
            emailjs.send(
                    EMAILJS_CONFIG.SERVICE_ID,
                    EMAILJS_CONFIG.TEMPLATE_ID,
                    templateParams
                )
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);

                    // Show success message
                    formMessage.className = 'p-4 rounded-lg text-center bg-green-500/20 text-green-400 border border-green-500';
                    formMessage.textContent = 'Pesan berhasil dikirim! Terima kasih telah menghubungi saya.';
                    formMessage.classList.remove('hidden');

                    // Reset form
                    document.getElementById('contact-form').reset();

                }, function(error) {
                    console.log('FAILED...', error);

                    // Show error message
                    formMessage.className = 'p-4 rounded-lg text-center bg-red-500/20 text-red-400 border border-red-500';
                    formMessage.textContent = 'Gagal mengirim pesan. Silakan coba lagi atau hubungi langsung melalui email.';
                    formMessage.classList.remove('hidden');
                })
                .finally(function() {
                    // Reset button state
                    buttonText.classList.remove('hidden');
                    loadingText.classList.add('hidden');
                    submitBtn.disabled = false;

                    // Hide message after 5 seconds
                    setTimeout(() => {
                        formMessage.classList.add('hidden');
                    }, 5000);
                });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Typing effect
        const texts = ['Developer', 'Designer', 'Problem Solver', 'Creator'];
        let textIndex = 0;
        let charIndex = 0;
        const typingElement = document.getElementById('typing-text');

        function typeText() {
            if (charIndex < texts[textIndex].length) {
                typingElement.textContent = texts[textIndex].substring(0, charIndex + 1);
                charIndex++;
                setTimeout(typeText, 100);
            } else {
                setTimeout(eraseText, 2000);
            }
        }

        function eraseText() {
            if (charIndex > 0) {
                typingElement.textContent = texts[textIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(eraseText, 50);
            } else {
                textIndex = (textIndex + 1) % texts.length;
                setTimeout(typeText, 500);
            }
        }

        // Start typing effect
        typeText();

        // Animate skill bars when in view
        const skillBars = document.querySelectorAll('.skill-progress');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const width = entry.target.getAttribute('data-width');
                    entry.target.style.width = width;
                }
            });
        });

        skillBars.forEach(bar => observer.observe(bar));

        // Mobile menu toggle
        function toggleMenu() {
            // Add mobile menu functionality here if needed
            console.log('Mobile menu toggle');
        }

        // Add scroll effect to navigation
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-primary');
            } else {
                nav.classList.remove('bg-primary');
            }
        });

        // Add fade-in animation
        gsap.registerPlugin();
        gsap.from('.animate-fade-in', {
            duration: 1,
            y: 50,
            opacity: 0,
            ease: 'power2.out'
        });

        // Animate cards on scroll
        gsap.utils.toArray('.card-hover').forEach(card => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                duration: 0.6,
                y: 50,
                opacity: 0,
                ease: 'power2.out'
            });
        });
    </script>
</body>

</html>