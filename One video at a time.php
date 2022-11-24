 <section class="imotechside">
    <div class="container" >
      <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height h" data-arrows="true" data-dots="true" data-infinite="true">
                      <div class="carousel-box">
                            <div class="d-block mw-100 img-fit">
                                <video src="https://imotechtraining.com/public/uploads/all/FAMA FINAL.mp4" class="video-bg" id="video1" controls></video>
                            </div>
                    </div>
                    <div class="carousel-box">
                            <div class="d-block mw-100 img-fit">
                            	<video src="https://imotechtraining.com/public/uploads/all/advert%20master%20imo.mp4" class="video-bg" id="video2" controls></video>
                            </div>
                    </div>
                     <div class="carousel-box">
                            <div class="d-block mw-100 img-fit">
                                	<video src="https://imotechtraining.com/public/uploads/all/MOHAMED CEO.mp4" class="video-bg" id="video3" controls></video>
                            </div>
                    </div>
                     <div class="carousel-box">
                            <div class="d-block mw-100 img-fit">
                                <video src="https://imotechtraining.com/public/uploads/all/ALPHA FINAL.mp4" class="video-bg" id="video4" controls></video>
                            </div>
                    </div>        
                </div>
            </div>
        <div class="col-lg-6" >
            <div class="text-justify">
                <h1 class=""><span>IMO Tech Training</h1>
                        <p>IMO Tech Training is an online, global learning platform that offers anyone from anywhere access to online IT courses with worldwide recognized certificates. Considering the importance of learning skills, IMO Tech Training envisions a society where anyone has access to transform their lives just by registering in some simple courses. More than 800 professionals have excelled in their IT careers with the help of IMO Tech Training. Our students have gained jobs from huge corporations like Deloit, Accenture, Amazon, etc. as well as the public sector. Additionally, the fact that our current certification pass rate is 93% validates the effectiveness of our curriculum. Therefore, IMO Tech Training offers a wide range of acclaimed courses for anyone wishing to start a career in IT or transition to a profession that suits his interests, pays well and offers prospects for advancement.</p>
                   </div>
              </div>
          </div>
        </div>
    </div>
</section>


<script>
    // assume only one video is playing at a time
var videoPlaying = null;

const onPlay = function() {
  if (videoPlaying && videoPlaying != this) {
    videoPlaying.pause()
  }
  videoPlaying = this
}

// init event handler
const videos = document.getElementsByClassName("video-bg")
for (let i = 0; i < videos.length; i++) {
  videos[i].addEventListener("play", onPlay)
} 
</script>

