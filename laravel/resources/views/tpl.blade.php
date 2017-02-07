@include('head')
<section class="box">
    <div class="banner1"><img src="{{asset('img/banner.png')}}" width="1000" border="0"/></div>
</section>
<section class="box">
    <aside class="left" id="left">
        <h2 class="lth"><span>{aside.h1}</span></h2>
        <div class="lborder">
            <ul class="psort">

                <li><a href="###">学院简介</a></li>
                <li><a href="###">师资力量</a></li>
                <li><a href="###">联系我们</a></li>
                <li><a href="###">学习报名</a></li>
                <li><a href="###">学院简介</a></li>
            </ul>
        </div>
        <h2 class="lth"><span>{aside.h2}</span></h2>
        <div class="lborder">
            <ul class="lcontact">

                <li>地址：{aside.addr}</li>
                <li>电话：{aside.tel}</li>
                <li> QQ：{aside.qq}</li>

            </ul>
        </div>
    </aside>
    <article id="right">
        @yield('content')
    </article>
</section>
<div class="clr"></div>
<footer class="box">
    <div class="btmx">
        <h3>没有学不好的学生，只有不会教不懂得的教的老师，为了让每个学员都能听懂，老师请努力改进！同学请努力学习！</h3>
    </div>
    <ul id="btm">
        <li id="btm1">
            <h1>新手上路</h1>
            <div><a href="/">会员注册</a> <a href="/">VIP会员入口</a> <a href="/">成为VIP</a> <a href="/">注意事项</a></div>
        </li>
        <li id="btm2">
            <h1>我有问题</h1>
            <div><a href="/">会员注册</a> <a href="/">VIP会员入口</a> <a href="/">成为VIP</a> <a href="/">注意事项</a></div>
        </li>
        <li id="btm3">
            <h1>投诉建议</h1>
            <div><a href="/">会员注册</a> <a href="/">VIP会员入口</a> <a href="/">成为VIP</a> <a href="/">注意事项</a></div>
        </li>
    </ul>
</footer>
<script src="js/common.js" type="text/javascript"></script>
</body>
</html>

