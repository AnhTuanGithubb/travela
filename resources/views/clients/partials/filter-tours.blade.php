@foreach ($filterTours as $tour)
                         <div class="col-md-6 col-lg-4">
                             <div class="tour-item">
                                 <div class="tour-img">
                                     <span class="badge badge-discount">25% Save</span>
                                     <img src="{{ asset('clients/assets/img/gallery-tour/' . $tour->images[0] . '') }}"
                                         alt="">
                                     <a href="#" class="add-wishlist"><i class="far fa-heart"></i></a>
                                 </div>
                                 <div class="tour-content">
                                     <div class="tour-top">
                                         <a href="#" class="tour-category"><i class="far fa-tag"></i>
                                             Historical</a>
                                         <span class="tour-place"><i class="far fa-earth-americas"></i> 10
                                             Places</span>
                                     </div>
                                     <h4 class="tour-title"><a
                                             href="{{ url('tour-detail', ['id' => $tour->tourId]) }}">{{ $tour->title }}</a>
                                     </h4>
                                     <p><i class="far fa-location-dot"></i> {{ $tour->destination }}</p>
                                     <div class="hotel-rate">
                                        @php
                                             $rating = round($tour->star); // Làm tròn đến số nguyên gần nhất
                                         @endphp

                                         @for ($i = 0; $i < $rating; $i++)
                                             <i class="fas fa-star text-warning"></i>
                                         @endfor
                                       
                                         <span class="hotel-rate-review">(2.5k Reviews)</span>
                                     </div>
                                     <div class="tour-duration"><i class="far fa-clock"></i>{{ $tour->time }}</div>
                                     <div class="tour-bottom">
                                         <div class="tour-price">
                                             Từ <span>{{ number_format($tour->priceAdult, 0, ',', '.') }}VND</span>
                                         </div>
                                         <div class="tour-text-btn">
                                             <a href="{{ url('tour-detail', ['id' => $tour->tourId]) }}">Xem Thêm <i
                                                     class="fas fa-arrow-right"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                     <div class="pagination-area">
                         <div aria-label="Page navigation example">
                             {{-- <ul class="pagination">
                                 <li class="page-item">
                                     <a class="page-link" href="#" aria-label="Previous">
                                         <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                     </a>
                                 </li>
                                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                     <a class="page-link" href="#" aria-label="Next">
                                         <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                     </a>
                                 </li>
                             </ul> --}}
                             <