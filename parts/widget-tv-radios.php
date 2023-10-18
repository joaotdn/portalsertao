<?php $tv_sertao  = get_field('ps_tv_sertao', 'option');
if ($tv_sertao) : ?>
    <div class="w-100">
        <h6 class="w-100 pb-2 text-center font-title fw-bold border-bottom border-3 border-danger">
            TV<span class="text-danger">Sertão</span>
        </h6>
        <div align="center">
            <div id="clappr"></div>
            <script>
                var player = new Clappr.Player({
                    source: "https://5a2b083e9f360.streamlock.net/tvsertao/tvsertao.sdp/playlist.m3u8",
                    parentId: "#clappr",
                    width: "100%",
                    height: "100%",
                    autoPlay: 'false',
                    //gaAccount: 'UA-44332211-1',
                    //gaTrackerName: 'MyPlayerInstance'
                });
            </script>
        </div>
        <!-- <div class="w-100 mt-3">
        <iframe style="width:100%; height:300px;" src="<?php //echo $tv_sertao; 
                                                        ?>" scrolling="no" frameborder="0" allowfullscreen></iframe>
    </div> -->
        <a href="<?php echo get_post_type_archive_link('tvsertao'); ?>" title="Veja mais na nossa programação" class="w-100 btn btn-danger btn-sm"><i class="fa-solid fa-play"></i> <i>PLAY</i><span class="font-title">Sertão</span></a>
    </div>
<?php endif; ?>

<?php $radio_sertao  = get_field('ps_radio_sertao', 'option');
if ($radio_sertao) : ?>
    <div class="w-100 mt-4 ps-top-radio bg-dark rounded-3">
        <div class="d-flex align-items-center p-2 rounded-3">
            <div>
                <a href="#" title="Tocar rádio">
                    <i class="fa-solid fa-circle-play"></i>
                </a>
            </div>
            <div class="flex-grow-1">
                <p class="w-100 text-center text-white fw-light m-0"><small>Escute agora</small></p>
                <h5 class="font-title w-100 text-center text-white m-0">Rádio Sertão</h5>
            </div>
        </div>
    </div>
<?php endif; ?>