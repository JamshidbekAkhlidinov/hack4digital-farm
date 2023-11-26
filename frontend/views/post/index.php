<?php
/*
 *   Jamshidbek Akhlidinov
 *   26 - 11 2023 10:59:59
 *   https://github.com/JamshidbekAkhlidinov
 */

use yii\helpers\Url;

$this->title = "Eng oxirgi chiqqan yangiliklar";

?>
<section id="blog" class="blog-area p-relative fix pt-150 pb-90"
         style="background: url(/img/bg/services-bg.png); background-repeat: no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                     data-animation="fadeInDown" data-delay=".4s">
                    <h2>
                        Eng oxirgi chiqqan yangiliklar
                    </h2>

                </div>

            </div>
        </div>
        <div class="row">
            <?php for ($i=1; $i<=3; $i++): ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp"
                     data-delay=".4s">
                    <div class="blog-thumb2">
                        <a href="<?=Url::to(['post/view'])?>"><img src="/img/blog/blog7.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">
                        <div class="date-home">
                            <i class="fal fa-calendar-alt"></i> 24th March 2023
                        </div>
                        <div class="b-meta">
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-user"></i> By Admin</li>
                                    <li><i class="fal fa-comments"></i> 3 Comments</li>
                                </ul>
                            </div>
                        </div>
                        <h4><a href="<?=Url::to(['post/view'])?>">Cras accumsan nulla nec lacus ultricies placerat.</a>
                        </h4>
                        <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec
                            tristique orci.</p>
                        <div class="blog-btn"><a href="<?=Url::to(['post/view'])?>">Read More <i
                                    class="fal fa-long-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp"
                     data-delay=".4s">
                    <div class="blog-thumb2">
                        <a href="<?=Url::to(['post/view'])?>"><img src="/img/blog/blog8.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">
                        <div class="date-home">
                            <i class="fal fa-calendar-alt"></i> 24th March 2023
                        </div>
                        <div class="b-meta">
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-user"></i> By Admin</li>
                                    <li><i class="fal fa-comments"></i> 3 Comments</li>
                                </ul>
                            </div>
                        </div>
                        <h4><a href="<?=Url::to(['post/view'])?>">Dras accumsan nulla nec lacus ultricies placerat.</a>
                        </h4>
                        <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec
                            tristique orci.</p>
                        <div class="blog-btn"><a href="<?=Url::to(['post/view'])?>">Read More <i
                                    class="fal fa-long-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp"
                     data-delay=".4s">
                    <div class="blog-thumb2">
                        <a href="<?=Url::to(['post/view'])?>"><img src="/img/blog/blog9.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">
                        <div class="date-home">
                            <i class="fal fa-calendar-alt"></i> 24th March 2023
                        </div>
                        <div class="b-meta">
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-user"></i> By Admin</li>
                                    <li><i class="fal fa-comments"></i> 3 Comments</li>
                                </ul>
                            </div>
                        </div>
                        <h4><a href="<?=Url::to(['post/view'])?>">Seas accumsan nulla nec lacus ultricies placerat.</a>
                        </h4>
                        <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec
                            tristique orci.</p>
                        <div class="blog-btn"><a href="<?=Url::to(['post/view'])?>">Read More <i
                                    class="fal fa-long-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

            <div class="pagination-wrap">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item active"><a href="#">1</a></li>
                        <li class="page-item"><a href="#">2</a></li>
                        <li class="page-item"><a href="#">3</a></li>
                        <li class="page-item"><a href="#">...</a></li>
                        <li class="page-item"><a href="#">10</a></li>
                        <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>

