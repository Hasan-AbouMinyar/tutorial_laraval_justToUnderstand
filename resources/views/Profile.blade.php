<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج مستوحى من آبل</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'SF Arabic', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        body {
            background-color: #f5f5f7;
            color: #1d1d1f;
        }
        
        nav {
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(20px);
            position: fixed;
            width: 100%;
            height: 44px;
            z-index: 1000;
        }
        
        .nav-container {
            max-width: 980px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        
        .nav-link {
            color: #f5f5f7;
            font-size: 12px;
            padding: 0 15px;
            text-decoration: none;
            transition: opacity 0.3s;
        }
        
        .nav-link:hover {
            opacity: 0.7;
        }
        
        .hero {
            height: 100vh;
            background: linear-gradient(to bottom, #000, #1d1d1f);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 44px;
        }
        
        .hero h1 {
            font-size: 56px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .hero h2 {
            font-size: 28px;
            font-weight: 400;
            margin-bottom: 20px;
        }
        
        .hero-links {
            margin-top: 20px;
        }
        
        .hero-link {
            color: #2997ff;
            text-decoration: none;
            font-size: 21px;
            margin: 0 15px;
        }
        
        .hero-link:hover {
            text-decoration: underline;
        }
        
        .products {
            max-width: 980px;
            margin: 50px auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .product-card {
            background-color: white;
            border-radius: 18px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        
        .product-card:hover {
            transform: scale(1.02);
        }
        
        .product-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .product-card p {
            font-size: 14px;
            color: #86868b;
            margin-bottom: 15px;
        }
        
        .product-link {
            color: #0066cc;
            text-decoration: none;
            font-size: 17px;
        }
        
        footer {
            background-color: #f5f5f7;
            padding: 20px 0;
            border-top: 1px solid #d2d2d7;
        }
        
        .footer-container {
            max-width: 980px;
            margin: 0 auto;
            font-size: 12px;
            color: #86868b;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <a href="#" class="nav-link">iPhone</a>
            <a href="#" class="nav-link">iPad</a>
            <a href="#" class="nav-link">Mac</a>
            <a href="#" class="nav-link">Watch</a>
            <a href="#" class="nav-link">AirPods</a>
            <a href="#" class="nav-link">الدعم</a>
        </div>
    </nav>
    
    <section class="hero">
        <h1>iPhone 15 Pro</h1>
        <h2>التصميم. التيتانيوم.</h2>
        <div class="hero-links">
            <a href="#" class="hero-link">معرفة المزيد &gt;</a>
            <a href="#" class="hero-link">شراء &gt;</a>
        </div>
    </section>
    
    <section class="products">
        <div class="product-card">
            <h3>MacBook Air</h3>
            <p>أداء مذهل في حزمة محمولة.</p>
            <a href="#" class="product-link">معرفة المزيد &gt;</a>
        </div>
        
        <div class="product-card">
            <h3>Apple Watch</h3>
            <p>أكثر من مجرد ساعة.</p>
            <a href="#" class="product-link">معرفة المزيد &gt;</a>
        </div>
        
        <div class="product-card">
            <h3>iPad Pro</h3>
            <p>أداء خارق بشاشة مذهلة.</p>
            <a href="#" class="product-link">معرفة المزيد &gt;</a>
        </div>
        
        <div class="product-card">
            <h3>AirPods Pro</h3>
            <p>جودة صوت رائعة بتقنية إلغاء الضوضاء.</p>
            <a href="#" class="product-link">معرفة المزيد &gt;</a>
        </div>
    </section>
    
    <footer>
        <div class="footer-container">
            <p>حقوق النشر © 2023 Apple Inc. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
    
    <script>
        // كود جافاسكريبت للتفاعلية
        document.addEventListener('DOMContentLoaded', function() {
            // تأثير التمرير للنافبار
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('nav');
                if (window.scrollY > 50) {
                    nav.style.backgroundColor = 'rgba(0, 0, 0, 0.95)';
                } else {
                    nav.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                }
            });
            
            // تأثيرات عند التحويم على المنتجات
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.1)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.05)';
                });
            });
        });
    </script>
</body>
</html>