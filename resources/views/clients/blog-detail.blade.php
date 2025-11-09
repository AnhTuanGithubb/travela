@include('clients.blocks.header')

@include('clients.blocks.banner2')

<!-- blog single area -->
<div class="blog-single-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-wrapper">



                    <div class="blog-single-content">

                        {{-- Ảnh chính của blog --}}
                        <div class="blog-thumb-img">
                            <img src="{{ asset('clients/assets/img/blog/' . $blog->detailimage) }}"
                                alt="{{ $blog->title }}">
                        </div>

                        <div class="blog-info">

                            {{-- Meta --}}
                            <div class="blog-meta">
                                <div class="blog-meta-left">
                                    <ul>
                                        <li><i class="far fa-user"></i> <a
                                                href="#">{{ $blog->author ?? 'Admin' }}</a></li>
                                        <li><i class="far fa-calendar"></i>
                                            {{ date('d/m/Y', strtotime($blog->postdate)) }}</li>
                                    </ul>
                                </div>
                                <div class="blog-meta-right">
                                    <a href="#" class="share-link"><i class="far fa-share-alt"></i> Share</a>
                                </div>
                            </div>

                            {{-- Nội dung chi tiết --}}
                            <div class="blog-details">
                                <h3 class="blog-details-title mb-20">{{ $blog->title }}</h3>

                                {{-- Mô tả ngắn --}}
                                @if (!empty($blog->description))
                                    <p class="mb-10">{!! $blog->description !!}</p>
                                @endif

                                {{-- Nội dung chính (giữ nguyên định dạng HTML trong DB) --}}
                                <div class="blog-content">
                                    {!! $blog->content !!}
                                </div>

                                {{-- Hình ảnh phụ (nếu có) --}}
                                <div class="row mt-3">
                                    @if (!empty($blog->image))
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('clients/assets/img/blog/' . $blog->image) }}"
                                                alt="">
                                        </div>
                                    @endif
                                    @if (!empty($blog->image))
                                        <div class="col-md-6 mb-20">
                                            <img src="{{ asset('clients/assets/img/blog/' . $blog->image) }}"
                                                alt="">
                                        </div>
                                    @endif
                                </div>

                                <hr>

                                {{-- Tag (nếu có cột tags trong DB, ngăn cách bằng dấu phẩy) --}}

                            </div>

                            {{-- Tác giả --}}
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="{{ asset('clients/assets/img/blog/author.jpg') }}" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h6>Author</h6>
                                    <h3 class="author-name">{{ $blog->author ?? 'Admin' }}</h3>
                                    <p>{{ $blog->author_description ?? 'Cảm ơn bạn đã đọc bài viết này!' }}</p>
                                    <div class="author-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="blog-comments">
    <h3>Bình luận</h3>

    <!-- Danh sách bình luận -->
    <div class="blog-comments-wrapper">
    @foreach ($comments as $comment)
        <div class="blog-comments-single">
            <div class="blog-comments-img">
                <img src="{{ $comment->avatar_url }}" alt="avatar" class="rounded-circle" width="60" height="60">
            </div>
            <div class="blog-comments-content">
                <h5>{{ $comment->name }}</h5>
                <span><i class="far fa-clock"></i> {{ $comment->time }}</span>
                <p>{{ $comment->comment }}</p>
            </div>
        </div>
    @endforeach

    @if ($comments->isEmpty())
        <p class="text-muted">Chưa có bình luận nào cho bài viết này.</p>
    @endif
</div>

    <!-- Form gửi bình luận -->
    <div class="blog-comments-form mt-4">
        <h3>Để lại bình luận</h3>
        <form id="blogCommentForm">
            @csrf
            <input type="hidden" name="blogId" value="{{ $blog->blogId }}">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Tên của bạn *" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email *" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <textarea name="comment" rows="5" class="form-control" placeholder="Nội dung bình luận *" required></textarea>
                    </div>
                    <button type="submit" class="theme-btn">
                        Gửi Bình Luận <i class="far fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar">
                    <!-- search-->
                    <div class="widget search">
                        <h5 class="widget-title">Search</h5>
                        <form class="blog-search-form">
                            <input type="text" class="form-control" placeholder="Search Here...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <!-- category -->
                    <div class="widget category">
                        <h5 class="widget-title">Category</h5>
                        <div class="category-list">
                            <a href="#"><i class="far fa-arrow-right"></i>Flight Deals<span>(20)</span></a>
                            <a href="#"><i class="far fa-arrow-right"></i>Amazing Tour<span>(10)</span></a>
                            <a href="#"><i class="far fa-arrow-right"></i>Support Cases<span>(15)</span></a>
                            <a href="#"><i class="far fa-arrow-right"></i>In Business<span>(30)</span></a>
                            <a href="#"><i class="far fa-arrow-right"></i>Handpicked Hotels<span>(25)</span></a>
                        </div>
                    </div>
                    <!-- recent post -->
                    <div class="widget recent-post">
                        <h5 class="widget-title">Recent Post</h5>
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="assets/img/blog/bs-1.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="#">It is a long established fact that a reader layout</a></h6>
                                <span><i class="far fa-clock"></i>29 August, 2025</span>
                            </div>
                        </div>
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="assets/img/blog/bs-2.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="#">It is a long established fact that a reader layout</a></h6>
                                <span><i class="far fa-clock"></i>29 August, 2025</span>
                            </div>
                        </div>
                        <div class="recent-post-single">
                            <div class="recent-post-img">
                                <img src="assets/img/blog/bs-3.jpg" alt="thumb">
                            </div>
                            <div class="recent-post-bio">
                                <h6><a href="#">It is a long established fact that a reader layout</a></h6>
                                <span><i class="far fa-clock"></i>29 August, 2025</span>
                            </div>
                        </div>
                    </div>
                    <!-- social share -->
                    <div class="widget social-share">
                        <h5 class="widget-title">Follow Us</h5>
                        <div class="social-share-link">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <!-- Recent Post -->
                    <div class="widget sidebar-tag">
                        <h5 class="widget-title">Popular Tags</h5>
                        <div class="tag-list">
                            <a href="#">Booking</a>
                            <a href="#">Business</a>
                            <a href="#">Tour</a>
                            <a href="#">Flight</a>
                            <a href="#">Cruise</a>
                            <a href="#">Activity</a>
                            <a href="#">Luxury</a>
                            <a href="#">Travel</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- blog single area end -->

</main>

@include('clients.blocks.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
$(document).ready(function() {
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000"
    };

    $('#blogCommentForm').on('submit', function(e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajax({
           url: "{{ route('blogcomment.store') }}",
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.success) {
                    toastr.success("Bình luận của bạn đã được gửi thành công!");
                    $('#blogCommentForm')[0].reset();

                    // Thêm bình luận mới vào danh sách mà không cần reload
                    $('.blog-comments-wrapper').prepend(`
                        <div class="blog-comments-single">
                            <div class="blog-comments-img">
                                <img src="{{ asset('clients/assets/img/blog/com-1.jpg') }}" alt="thumb">
                            </div>
                            <div class="blog-comments-content">
                                <h5>${response.data.name}</h5>
                                <span><i class="far fa-clock"></i> Vừa xong</span>
                                <p>${response.data.comment}</p>
                            </div>
                        </div>
                    `);
                } else {
                    toastr.error("Không thể gửi bình luận. Vui lòng thử lại.");
                }
            },
            error: function(xhr) {
                if (xhr.responseJSON?.errors) {
                    let msg = "";
                    $.each(xhr.responseJSON.errors, function(key, val) {
                        msg += val[0] + "<br>";
                    });
                    toastr.error(msg, "Lỗi nhập liệu");
                } else {
                    toastr.error("Lỗi máy chủ. Vui lòng thử lại sau!");
                }
            }
        });
    });
});
</script>
