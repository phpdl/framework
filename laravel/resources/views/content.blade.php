<div class="container">
      <article>
              <h1>标题：{{$cur->title}}</h1>
              <time>浏览量：{{$cur->hits}}</time>
              <div>文章内容：{{$cur->content}}</div>

              <section>
                      @if($pre)
                              <a href="{{$pre->id}}">{{$pre->name }}</a>
                      @else
                              <span>已经是最上一篇</span>
                      @endif

                      @if($next)
                              <a href="{{$next->id}}">{{$next->name }}</a>
                      @else
                              <span>已经是最下一篇</span>
                      @endif
              </section>
      </article>

</div>