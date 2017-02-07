@extends("tpl")
@section('css')
<link href="{{asset('css/ny.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/list.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
        <div class="right1">
            <h3 class="message2_2"> 公司新闻 </h3>
            <div class="right2"> 您的位置：<a href="index.php">动力学院</a> &gt;&gt; <a href="list.html">新闻动态</a> &gt;&gt <a
                        href="list.html">公司新闻</a></div>
        </div>
        <div class="content">
            <ul class="right3">
                <li><a href="content.html">动力学院欢迎您，动力学院来自科教之城安徽合肥</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">PHP技术是-全球应用最广泛的WEB技术之一。</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">SEO搜索引擎优化技术让你的产品畅销全国，走向世界。</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">PHP+SEO+动力学院 === 获取一身好能力...</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">PHP + SEO + 动力学院 + 你的优势 === 财源滚滚 </a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">没有什么能比改变自己，改变世界更让大众心动...</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">动起来，人生一天比一天精彩！</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">世界本没有伟人，是我们的点点滴滴努力把普通人改变成了伟人...</a>
                    <h5>[2008-06-16]</h5>
                </li>
                <li><a href="content.html">写一个字很简单，但是写一万个简单的字你能做到吗？跟赵老师一起来完成这个任务...</a>
                    <h5>[2008-06-16]</h5>
                </li>
            </ul>
            <div style="clear:both; height:10px;"></div>
            <div id="page"><a href='#'>首页</a><a href='#'>&lt;上一页</a><b><a href='#'>1</a><span>2</span><a href='#'>3</a></b><a
                        href='#'>下一页&gt;</a><a href='#'>末页</a>
                <div></div>
            </div>
        </div>
@endsection
