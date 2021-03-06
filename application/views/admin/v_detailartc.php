    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MANAGEMEN ARTIKEL
                </h2>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <!-- Cover Article -->
                        <div class="card-image">
                          <img class="responsive-img" src="<?= base_url('assets/img/blog/'.$detail['cover'].".jpg") ?>" alt="">
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <!-- Title Article -->
                                <div class="col s12">
                                    <h3><?= $detail['title'] ?></h3>
                                    <span><?= $detail['author'] ?> | <?= $detail['date'] ?></span>
                                    <div class="divider"></div>
                                </div>

                                <!-- Content -->
                                <div class="col s12">
                                    <p class="light"><?= $detail['content'] ?></p>
                                    <div class="divider"></div>
                                </div>

                                <!-- Comment -->
                                <div class="col s10 offset-s1">
                                    <script id="dsq-count-scr" src="//mahlultech.disqus.com/count.js" async></script>
                                    <div id="disqus_thread"></div>
                                    <script>

                                    /**
                                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                    /*
                                    var disqus_config = function () {
                                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    */
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://mahlultech.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                    })();
                                    </script>
                                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>