<style>
    :root {
    --primary: #eb2525;
    --dark: #1e293b;
    --light: #f8fafc;
    --text: #334155;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    font-family: 'Segoe UI', system-ui, sans-serif;
    line-height: 1.6;
    color: var(--text);
    scroll-behavior: smooth;
}

.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Navigation */
/* 导航栏容器 */
.val-navbar {
    display: flex;
    justify-content: center;
    align-items: flex-start; /* 贴顶对齐 */
    height: 40px;
    background: rgba(255,255,255,0.05);
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.nav-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-self: center;
    opacity: 0.6; /* 降低亮度，让视觉聚焦中间 */
    font-size: 0.85rem; /* 字体调小 */
}

.side-links a {
    color: var(--dark);;
    text-decoration: none;
    font-weight: bold;
    margin: 0 20px;
    letter-spacing: 2px;
}

/* 倒梯形容器 */
/* 1. 外部大容器 */
.nav-main-btn {
    position: relative;
width: 300px;   /* 从180px增加到300px，让它更长 */
    height: 85px;   /* 从50px增加到85px，让它更高 */
    display: flex;
    align-items: center;
    justify-content: center;
}

/* 2. 梯形背景层 */
/* 倒梯形背景 */
.trapezoid-bg {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--dark);;
    /* 关键：倒梯形切角（上宽下窄） */
    clip-path: polygon(0 0, 100% 0, 85% 100%, 15% 100%);
    z-index: 1;
}
/* 3. 链接容器（放照片的层） */
.btn-link {
    position: relative;
    z-index: 2; /* 确保在梯形上面 */
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

/* 4. Logo图片控制 */
.btn-img {
    /* 核心：控制 Logo 大小 */
    max-width: 65%;   /* 让照片宽度占容器的 65%，这样左右就有留白 */
    max-height: 60%;  /* 让照片高度占容器的 60%，这样上下就有留白 */
    
    /* 核心：固定比例不拉伸 */
    object-fit: contain; 
    
    /* 微调：如果Logo位置看起来偏下，可以用 transform 向上移一点 */
    transform: translateY(-2px); 
    transition: transform 0.3s ease;
}

/* 悬停效果（可选） */
.btn-link:hover .btn-img {
    transform: translateY(-2px) scale(1.1); /* 鼠标移上去轻微放大 */
}



/* 悬停效果 */
.nav-main-btn:hover .trapezoid-bg {
    background-color: #fff;
    filter: drop-shadow(0 0 10px var(--val-red));
}
/* Hero Section */
.hero {
    background: linear-gradient(135deg, #1e293b 0%, #2563eb 100%);
    color: white;
    padding: 150px 0;
    text-align: center;
}

.hero h1 { font-size: 3.5rem; margin-bottom: 20px; }
.hero p { font-size: 1.2rem; margin-bottom: 30px; opacity: 0.9; }

/* Buttons */
.btn-primary, .btn-submit {
    background: #fff;
    color: var(--primary);
    padding: 12px 30px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit {
    background: var(--primary);
    color: white;
    width: 100%;
    font-size: 1.1rem;
}

.btn-primary:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }

/* Grid Layout */
.section { padding: 80px 0; text-align: center; }
.bg-light { background: var(--light); }
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

/* Form Styles */
.form-wrapper {
    max-width: 500px;
    margin: 40px auto 0;
}

input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.success-msg {
    background: #dcfce7;
    color: #166534;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
}

footer { padding: 40px 0; text-align: center; background: var(--dark); color: #fff; }

/* 修改后的 Event Container 样式 */
.event-hero-container {
    display: flex;
    justify-content: flex-start; /* 改为靠左对齐，更有机能感 */
    align-items: center;
    padding: 120px 10%; /* 增加两侧留白 */
    min-height: 60vh;
    background: radial-gradient(circle at 20% 50%, rgba(235, 37, 37, 0.15) 0%, transparent 50%);
}

.event-content {
    position: relative;
    background: rgba(15, 25, 35, 0.85); /* 稍微加深，突出 var(--primary) */
    padding: 50px 60px;
    border-left: 6px solid var(--primary); /* 使用你的新红色变量 */
    backdrop-filter: blur(15px);
    max-width: 850px;
    box-shadow: 20px 20px 0px rgba(0, 0, 0, 0.3); /* 增加硬阴影 */
    /* 右下角硬切角 */
    clip-path: polygon(0 0, 100% 0, 100% 88%, 92% 100%, 0 100%);
}

.event-overline {
    color: var(--primary);
    font-weight: 800;
    letter-spacing: 6px;
    font-size: 0.75rem;
    margin-bottom: 15px;
    opacity: 0.9;
}

.event-title {
    color: #ffffff; /* 标题用纯白增加对比 */
    font-size: 4.5rem;
    font-weight: 900;
    margin: 0 0 40px 0;
    text-transform: uppercase;
    line-height: 0.95;
    letter-spacing: -2px;
}

.event-info-grid {
    display: flex;
    align-items: center;
    gap: 50px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 35px;
}

.info-item .label {
    color: var(--primary); /* Label 使用红色点缀 */
    font-size: 0.7rem;
    font-weight: 900;
    letter-spacing: 2px;
    margin-bottom: 8px;
    text-transform: uppercase;
}

.info-item .value {
    color: #f1f5f9; /* 对应你的 var(--light) 效果 */
    font-size: 1.8rem;
    font-weight: 800;
    font-family: 'Oswald', sans-serif; /* 建议引入一个窄体粗字 */
}

.info-divider {
    width: 2px;
    height: 50px;
    background: var(--primary);
    opacity: 0.3;
    transform: rotate(15deg);
}

/* 装饰性背景文字 */
.event-content::after {
    content: "LIVE";
    position: absolute;
    top: 20px;
    right: 40px;
    font-size: 5rem;
    font-weight: 900;
    color: white;
    opacity: 0.03; /* 极淡的背景水印 */
    pointer-events: none;
}

/* 截止日期特别样式 */
.info-item.deadline .label {
    color: #ffffff; /* 截止日期的标签改用白色 */
    background: var(--primary); /* 红色背景标签 */
    padding: 2px 6px;
    display: inline-block;
    width: fit-content;
    margin-bottom: 5px;
}

.info-item.deadline .value {
    color: white; /* 日期数字显示为红色，表示紧迫感 */
    text-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
    animation: pulse-red 2s infinite; /* 增加呼吸灯动画 */
}

    /* 呼吸灯动画定义 */
@keyframes pulse-red {
    0% { opacity: 1; }
    50% { opacity: 0.7; }
    100% { opacity: 1; }
}

/* 响应式微调：如果屏幕太窄，隐藏中间的旋转分割线 */
@media (max-width: 768px) {
    .info-divider {
        display: none;
    }
    .event-info-grid {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
}
/*theme*/
/* 横向周期时间轴 */
.theme-period-horizontal {
    margin-top: 20px;
    padding: 30px;
    background: rgba(235, 37, 37, 0.05); /* 淡淡的红色背景 */
    border: 1px solid rgba(235, 37, 37, 0.1);
}

.period-label {
    display: inline-block;
    color: var(--primary);
    font-weight: 900;
    letter-spacing: 3px;
    font-size: 0.8rem;
    margin-bottom: 25px;
    padding-bottom: 5px;
    border-bottom: 2px solid var(--primary);
}

.period-timeline {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size:1000px;
    gap: 20px;
}

.timeline-item {
    display: flex;
    align-items: center;
    gap: 15px;
    flex: 1;
}

.day-num {
    font-size: 2.5rem;
    font-weight: 900;
    color: var(--primary);
    line-height: 1;
    font-family: 'Oswald', sans-serif;
}

.day-info {
    display: flex;
    flex-direction: column;
}

.day-text {
    font-size: 1.1rem;
    font-weight: bold;
    color: var(--light);
}

.day-sub {
    font-size: 0.7rem;
    color: rgba(255, 255, 255, 0.4);
    letter-spacing: 1px;
}

/* 时间轴连接线 */
.timeline-connector {
    width: 50px;
    height: 1px;
    background: rgba(235, 37, 37, 0.3);
}

/* 移动端适配：变回垂直排列 */
@media (max-width: 768px) {
    .period-timeline {
        flex-direction: column;
        align-items: flex-start;
    }
    .timeline-connector {
        width: 1px;
        height: 20px;
        margin-left: 20px;
    }
}

.theme-section {
    padding: 80px 10%;

    color: var(--light);
}

.theme-container {
    position: relative;
    background: rgba(15, 25, 35, 1);
    border: 1px solid rgba(235, 37, 37, 0.2); /* 极细的红色边框 */
    padding: 60px;
    overflow: hidden;
}

/* 装饰性角标 */
.corner-accent.top-right {
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100px;
    background: var(--primary);
    clip-path: polygon(100% 0, 0 0, 100% 100%); /* 三角形切角 */
    opacity: 0.8;
}

.theme-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 60px;
    align-items: center;
}

/* 主题标题样式 */
.theme-title {
    font-size: 2.5rem;
    font-weight: 900;
    text-transform: uppercase;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    letter-spacing: 1px;
}

.accent-bar {
    width: 8px;
    height: 40px;
    background: var(--primary);
    margin-right: 15px;
    display: inline-block;
}

.theme-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: rgba(248, 250, 252, 0.8); /* 使用 var(--light) 的透明色 */
    max-width: 600px;
}

/* 周期盒子样式 */
.period-box {
    border: 2px solid rgba(255, 255, 255, 0.1);
    padding: 30px;
    background: rgba(0, 0, 0, 0.2);
}

.period-label {
    display: block;
    color: var(--primary);
    font-weight: bold;
    letter-spacing: 3px;
    font-size: 0.8rem;
    margin-bottom: 25px;
    border-bottom: 1px solid var(--primary);
    width: fit-content;
}

.day-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.day-num {
    font-family: 'Courier New', monospace;
    font-size: 1.5rem;
    font-weight: 900;
    color: var(--primary);
    margin-right: 15px;
}

.day-text {
    font-weight: bold;
    letter-spacing: 1px;
    
}

/* 响应式适配 */
@media (max-width: 992px) {
    .theme-grid {
        grid-template-columns: 1fr;
    }
    .theme-container {
        padding: 40px 20px;
    }
}

/*how to participate*/


.container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }


/* Hero 区域：简约直观 */
.simple-hero {
    background: var(--dark);
    padding: 100px 0;
    color: #fff;
    border-bottom: 4px solid var(--primary);
}

.badge {
    background: var(--primary);
    padding: 4px 12px;
    font-size: 0.75rem;
    font-weight: bold;
    border-radius: 2px;
}

.simple-hero h1 {
    font-size: 3rem;
    margin: 20px 0;
    line-height: 1.1;
    letter-spacing: -1px;
}

.hero-desc {
    font-size: 1.25rem;
    opacity: 0.8;
    margin-bottom: 40px;
}

.hero-meta {
    display: flex;
    gap: 30px;
}

.meta-item { font-size: 0.9rem; color: #cbd5e1; }

/* 参与步骤：清晰网格 */
.steps-section { padding: 80px 0; background: var(--light); }
.section-title {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 60px;
    color: var(--dark);
}

.steps-simple-grid {
    display: grid;
grid-template-columns: repeat(2, 1fr); /* 关键：每一排显示两个 */
    gap: 40px;
}

.s-step {
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    position: relative;
}

.s-num {
    font-size: 3rem;
    font-weight: 900;
    color: var(--primary);
    opacity: 0.15;
    position: absolute;
    top: 10px;
    right: 20px;
}

.s-step h3 { margin-bottom: 15px; color: var(--dark); font-size: 1.2rem; }
.s-step p { color: var(--text); font-size: 0.95rem; }

.simple-note {
    margin-top: 50px;
    text-align: center;
    font-size: 0.85rem;
    color: #64748b;
}

@media (max-width: 768px) {
    .simple-hero h1 { font-size: 2rem; }
}

/*terms*/
.tc-section {
    padding: 60px 0;
    background-color: #ffffff; /* 保持纯净感 */
}

.tc-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px;
    background-color: var(--light); /* 淡淡的灰色背景，与页面主体区分 */
    border-radius: 4px;
}

.tc-title {
    color: var(--dark);
    font-size: 1.5rem;
    font-weight: 900;
    letter-spacing: 1px;
    margin-bottom: 30px;
    /* 标志性的红条 */
    border-left: 5px solid var(--primary);
    padding-left: 20px;
    line-height: 1;
}

.tc-content {
    color: var(--text);
    font-size: 0.95rem;
    line-height: 1.8; /* 核心：加宽行高，提升阅读舒适度 */
}

.tc-list {
    padding-left: 20px;
}

.tc-list li {
    margin-bottom: 12px;
    padding-left: 10px;
}

/* 强调文字样式 */
.tc-list li strong {
    color: var(--dark);
}

.tc-footer {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    font-size: 0.85rem;
    color: #94a3b8;
    font-style: italic;
}

/* 适配移动端 */
@media (max-width: 600px) {
    .tc-container {
        padding: 20px;
        margin: 0 15px;
    }
}

/*form*/
.form-redirect-section {
    padding: 80px 0;
    background-color: var(--light); /* 与 T&C 区分 */
    text-align: center;
}

.form-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 60px 40px;
    background: #ffffff;
    border-top: 4px solid var(--primary);
    box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}

.form-icon {
    width: 60px;
    height: 60px;
    color: var(--primary);
    opacity: 0.8;
}

.form-text h2 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 60px;
    color: var(--dark);
}

.form-text p {
    color: var(--text);
    font-size: 1rem;
    margin-bottom: 20px;
}

/* 标志性按钮样式 */
.form-btn {
    display: inline-block;
    background-color: var(--primary);
    color: #ffffff;
    padding: 18px 40px;
    font-size: 1.1rem;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.form-btn:hover {
    background-color: var(--dark);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(235, 37, 37, 0.2);
}

.secure-tag {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.8rem;
    color: #94a3b8;
    margin-top: 10px;
}
</style>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2026 全球开发者峰会 | 立即报名</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <nav class="val-navbar">
    

    <div class="nav-main-btn">
    <div class="trapezoid-bg"></div>
    <a href="#register" class="btn-link">
        <img src="../picture/Colorful.png" alt="Profile" class="btn-img">
    </a>
</div>


</nav>

    <header class="hero">
        <div class="container">
            <h1>banner</h1>
            <p>banner</p>
            <a href="#register" class="btn-primary">banner</a>
        </div>
    </header>

    <div class="event-hero-container">
    <div class="event-content">
        <div class="event-overline">COLORFUL CAMPAIGN // 2026</div>
        
        <h1 class="event-title">GeForce Holiday Campaign</h1>
        
        <div class="event-info-grid">
            <div class="info-item">
                <span class="label">DATE</span>
                <span class="value">16th MAR - 26th MAR</span>
            </div>
            <div class="info-divider"></div>
            <div class="info-item">
                <span class="label">LOCATION</span>
                <span class="value">ONLINE</span>
            </div>
            <div class="info-divider"></div>

    <div class="info-item deadline">
        <span class="label">REGISTRATION ENDS</span>
        <span class="value">3rd May 2026</span>
    </div>
        </div>
        
    
        <div class="event-footer-line"></div>
    </div>
</div>


    <div class="simple-hero">
        <div class="container">
            <div class="hero-content">
                <span class="badge">Limited-Time Promotion</span>
                <h1>Purchase selected GeForce RTX 5060 Ti <br>Get up to RM100 TNG eWallet credit!</h1>
                <p class="hero-desc">Enjoy up to RM100 TNG eWallet reward when you purchase selected GeForce RTX 5060 Ti graphics cards during the promotion period.</p>
                <div class="hero-meta">
                    <div class="meta-item"><strong>Period:</strong> 16th March 2026 - 26th April 2026</div>
                    <div class="meta-item"><strong>Last Submission:</strong> 3rd May 2026</div>
                </div>
            </div>
        </div>
</div>

    <section id="steps" class="steps-section">
        <div class="container">
            <h2 class="section-title">How to Participate</h2>
            <div class="steps-simple-grid">
                <div class="s-step">
                    <div class="s-num">1</div>
                    <h3>Purchase</h3>
                    <p>Purchase a selected GeForce RTX 5060 Ti 8GB  graphics card during the promotion period.</p>
                </div>
                <div class="s-step">
                    <div class="s-num">2</div>
                    <h3>Keep</h3>
                    <p>Keep your invoice and product serial number.</p>
                </div>
                <div class="s-step">
                    <div class="s-num">3</div>
                    <h3>Submit</h3>
                    <p>Submit a complete claim at the form below before the deadline.</p>
                </div>
                <div class="s-step">
                    <div class="s-num">4</div>
                    <h3>Receive</h3>
                    <p>Receive up to RM100 TNG eWallet credit by 5th May 2026.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="form-redirect-section">
    <div class="form-container">
        <div class="form-icon">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM9 17H7V15H9V17ZM9 13H7V11H9V13ZM9 9H7V7H9V9ZM17 17H11V15H17V17ZM17 13H11V11H17V13ZM17 9H11V7H17V9Z" fill="currentColor"/>
            </svg>
        </div>

        <div class="form-text">
            <h2>Please submit your Claim</h2>
            <p>click the button below to fill up the Google Form</p>
        </div>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfecHIdDAKoVDWscop2_p89LQsG9dTi7WZXTAYvNrSQAgxFnw/viewform" target="_blank" class="form-btn">
            FILL FORM NOW
        </a>
    
    </div>
</section>

    <section class="tc-section">
    <div class="tc-container">
        <h2 class="tc-title">TERMS & CONDITIONS</h2>
        
        <div class="tc-content">
            <ol class="tc-list">
                <li>Incomplete applications will be disqualified and rejected from the program.</li>
                <li>Only purchases of COLORFUL GEFORCE RTX™ 5060 TI GAMING DUO 8GB-V 
IGAME GEFORCE RTX™ 5060 TI ULTRA W DUO OC 8GB-V are eligible for TNG e-Wallet rewards up to RM100.</li>
                <li>The claims will be released through TNG E-wallet by 5th May 2026 onwards. </li>
                <li>This program applies only to locally sourced products, and product serial number verification is required. (Product serial numbers from other countries are not eligible.)</li>
                <li>Each product serial number is eligible for one submission.</li>
                <li>GMC WORLDWIDE SDN BHD reserves the right to filter entries. Suspicious entries, serial numbers, invoice verifications, or purchases made by dealers/sub-dealers will be deemed invalid.</li>
                <li>Purchase the COLORFUL GEFORCE RTX 5060 TI GAMING DUO 8GB-V to receive a RM50 TNG e-Wallet reward, while purchasing the IGAME GEFORCE RTX 5060 TI ULTRA W DUO OC 8GB-V will earn a RM100 reward.</li>
                
            </ol>
            
            <div class="tc-footer">
                * The organizer reserves the final right of interpretation. For any inquiries, please contact us through the official support channels.
            </div>
        </div>
    </div>
</section>

</body>
</html>

    <section id="about" class="section">
        <div class="container">
            <h2>where to buy</h2>
            <div class="grid">
                <div class="card">
                    <h3>顶尖讲师</h3>
                    <p>来自 Google, Meta 和 OpenAI 的核心团队分享。</p>
                </div>
                <div class="card">
                    <h3>实战工作坊</h3>
                    <p>手把手教你如何部署下一代 AI 模型。</p>
                </div>
                <div class="card">
                    <h3>社交网络</h3>
                    <p>与超过 500 位行业精英面对面交流。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="register" class="section bg-light">
        <div class="container">
            <h2>google form</h2>
            <div class="form-wrapper">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    
                    // 这里可以添加数据库存储逻辑
                    echo "<div class='success-msg'>感谢报名，$name！确认邮件已发送至 $email。</div>";
                }
                ?>
                <form method="POST" action="#register">
                    <input type="text" name="name" placeholder="您的姓名" required>
                    <input type="email" name="email" placeholder="电子邮箱" required>
                    <button type="submit" class="btn-submit">提交报名</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 TechConf Global. All rights reserved.</p>
    </footer>

</body>
</html>