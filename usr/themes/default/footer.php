<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer id="rin-footer" style="text-align:center; padding:12px 0; font-size:14px; color:#666; line-height:1.2;">
    <!-- 第一行：隐私政策、免责声明、站点地图、Robots协议 -->
    <div style="margin:0;">
    <a href="/privacy">隐私政策</a> |
        &nbsp;|&nbsp;
    <a href="/statement">免责声明</a> |
        &nbsp;|&nbsp;
    <a href="/sitemap.xml">站点地图</a> |
        &nbsp;|&nbsp;
    <a href="/sitemap.xml">>Robots协议</a>
    </div>

    <!-- 第二行：版权 + Cloudflare防御 -->
    <div style="margin:2px 0;">
        Copyright 2026 ©版权所有 
        <a href="<?php $this->options->siteUrl(); ?>" id="bg-link" target="_blank"><?php $this->options->title(); ?></a>
        &nbsp;|&nbsp;
        <a href="https://dash.cloudflare.com/" class="active">
            <img src="https://img.shields.io/badge/Cloudflare加速防御-green?style=flat&logo=Claris" alt="Cloudflare" style="height:18px;vertical-align:middle;">
        </a>
    </div>

    <!-- 第三行：运行时间 + 访问量 -->
    <div style="margin:2px 0; font-size:12px;">
        <span style="color:#FFB448; font-weight:bold;">本站已安全运行:</span>
        <span id="momk"></span>
        &nbsp;&nbsp;
        <span style="color:#6EE7FF; font-weight:bold;">累计访问:</span>
        <span id="visitNum"></span>
    </div>

    <script language=javascript>
        // 网站运行计时
        function show_date_time(){
            window.setTimeout("show_date_time()", 10);
            BirthDay=new Date("07-07-2026 09:12:18");
            today=new Date();
            timeold=(today.getTime()-BirthDay.getTime());
            daysold=Math.floor(timeold/(24*60*60*1000));
            hrsold=Math.floor((timeold%(24*60*60*1000))/(60*60*1000));
            minsold=Math.floor((timeold%(60*1000))/(60*1000));
            seconds=Math.floor((timeold%(60*1000))/1000);
            momk.innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";
        }
        show_date_time();

        // 本地访客统计
        let baseVisit = 10;
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
            color:#666;
            text-decoration:none;
        }
        #rin-footer a:hover {
            color:#007bff;
        }
    </style>
</footer>

<?php $this->footer(); ?>
</body>
</html>
