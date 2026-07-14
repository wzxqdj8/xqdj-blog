<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer id="rin-footer" style="text-align:center; padding:20px 0; font-size:14px; color:#666; line-height:1.8;">
    <!-- SEO底部导航（适配/{slug}独立页面路由） -->
    <div style="margin-bottom:10px;">
    <a href="/privacy">隐私政策</a> |
    <a href="/statement">免责声明</a> |
    <a href="/sitemap.xml">站点地图</a> |
    <a href="/robots.txt">Robots协议</a>
    </div>

    <!-- 版权、站点标识、Cloudflare -->
    <div>Copyright 2026 ©版权所有
        <a href="<?php $this->options->siteUrl(); ?>" id="bg-link"><?php $this->options->title(); ?></a>
        &nbsp;|&nbsp;
        <a href="https://dash.cloudflare.com/" class="active">
            <img src="https://img.shields.io/badge/Cloudflare加速防御-green?style=flat&logo=Claris" alt="Cloudflare网站加速防护" style="height:18px;vertical-align:middle;">
        </a>
    </div>

    <!-- 运行时长 + 本地访问统计 -->
    <div style="margin-top:8px;font-size:12px;">
        <span style="color:#FFB448; font-weight:bold;">本站已安全运行:</span>
        <span id="momk"></span>
        &nbsp;&nbsp;
        <span style="color:#6EE7FF; font-weight:bold;">累计访问:</span>
        <span id="visitNum"></span>
    </div>

    <script language=javascript>
        // 建站计时
        function show_date_time(){
            window.setTimeout("show_date_time()", 1000);
            BirthDay=new Date("06-15-2026 09:12:18");
            today=new Date();
            timeold=(today.getTime()-BirthDay.getTime());
            daysold=Math.floor(timeold/(24*60*60*1000));
            hrsold=Math.floor((timeold%(24*60*60*1000))/(60*60*1000));
            minsold=Math.floor((timeold%(60*60*1000))/(60*1000));
            seconds=Math.floor((timeold%(60*1000))/1000);
            momk.innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";
        }
        show_date_time();

        // 本地访客计数
        let baseVisit = 1000;
        let count = localStorage.getItem("visitCount") ? parseInt(localStorage.getItem("visitCount")) : baseVisit;
        count++;
        localStorage.setItem("visitCount", count);
        document.getElementById("visitNum").innerText = count + " 人次";
    </script>

    <style>
        #momk, #visitNum{
            animation:change 10s infinite;
            font-weight:800;
            font-size:12px;
        }
        @keyframes change{
            0%{color:#5cb85c;}
            25%{color:#556bd8;}
            50%{color:#e40707;}
            75%{color:#66e616;}
            100% {color:#67bd31;}
        }
        #rin-footer a {
            color: #666;
            text-decoration: none;
        }
        #rin-footer a:hover {
            color: #0096ff;
            text-decoration: underline;
        }
    </style>
</footer>

<?php $this->footer(); ?>
</body>
</html>
