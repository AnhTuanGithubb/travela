 @include('clients.blocks.header')

 @include('clients.blocks.banner2')


 <!-- blog area -->
 <div class="blog-area py-120">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                 <div class="site-heading text-center">
                     <span class="site-title-tagline"><i class="far fa-plane"></i> Our Blog</span>
                     <h2 class="site-title">Our Latest Blog & News</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             @foreach ($blogs as $blog)
                 <div class="col-md-6 col-lg-4">
                     <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                         <span class="blog-date">{{ \Carbon\Carbon::parse($blog->postdate)->format('F d, Y') }}</span>
                         <div class="blog-item-img">
                             <img src="{{ asset('clients/assets/img/blog/' . $blog->image) }}" alt="Thumb">
                         </div>
                         <div class="blog-item-info">
                             <div class="blog-item-meta">
                                 <ul>
                                     <li><a href="#"><i class="far fa-user-circle"></i> By {{ $blog->author }}</a>
                                     </li>
                                     {{-- <li><a href="#"><i class="far fa-comments"></i>
                                             {{ number_format($blog->commentsCount) }} Comments</a></li> --}}
                                              <li><i class="far fa-comments"></i> {{ $blog->comments_count }} bình luận</li>
                                 </ul>
                             </div>
                             <h4 class="blog-title">
                                 <a href="#">{{ $blog->title }}</a>
                             </h4>
                             <a href="{{ route('blog-detail', $blog->blogId) }}" class="theme-btn mt-3">Read More <i
                                     class="fas fa-arrow-circle-right"></i></a>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>


         <!-- pagination -->
         <div class="pagination-area">
    <div aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{-- Nút Previous --}}
            @if ($blogs->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link"><i class="far fa-angle-double-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                    </a>
                </li>
            @endif

            {{-- Các số trang --}}
            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            {{-- Nút Next --}}
            @if ($blogs->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="far fa-angle-double-right"></i></span>
                </li>
            @endif
        </ul>
    </div>
</div>

         <!-- pagination end -->
     </div>
 </div>
 <!-- blog area end -->

 </main>

 @include('clients.blocks.footer')
