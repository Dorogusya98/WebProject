<template>
  <div class="watch">
    <div class="info-watch-content">
      <div class="detail-watch-content">
        <h1>{{model.title}}</h1>
        <hr class="poloska-detail" style="margin-top: 7px; margin-bottom: 7px;">
        <b>Жанры:</b> {{model.genre}}
        <br>
        <hr class="poloska-detail" style="margin-top: 7px; margin-bottom: 7px;">
        <p>{{model.description}}</p>
      </div>

      <div class="cover-watch-content">
        <img :src="model.cover_path" alt="gtfo">
      </div>
    </div>

    <div class="infoepbox">
      <a class="infovanr" title="Episode 9" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1r">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2r">
                <div class="centerv">9</div>
              </div>
              <div class="infoept3r">
                <div class="centerv">15 часов</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 8" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">8</div>
              </div>
              <div class="infoept3">
                <div class="centerv">1 неделя</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 7" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">7</div>
              </div>
              <div class="infoept3">
                <div class="centerv">2 недели</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 6" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">6</div>
              </div>
              <div class="infoept3">
                <div class="centerv">3 недели</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 5" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">5</div>
              </div>
              <div class="infoept3">
                <div class="centerv">4 недель</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 4" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">4</div>
              </div>
              <div class="infoept3">
                <div class="centerv">1 месяц</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 3" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">3</div>
              </div>
              <div class="infoept3">
                <div class="centerv">1 месяц</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 2" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">2</div>
              </div>
              <div class="infoept3">
                <div class="centerv">2 месяца</div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="infovan" title="Episode 1" href="#">
        <div class="infoepmain">
          <div class="infoep">
            <div class="infoept">
              <div class="infoept1">
                <div class="centerv">Эпизод</div>
              </div>
              <div class="infoept2">
                <div class="centerv">1</div>
              </div>
              <div class="infoept3">
                <div class="centerv">2 месяца</div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="video-watch-content">
      <video controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
        <!-- Video files -->
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
        <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

        <!-- Caption files -->
        <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
        <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

        <!-- Fallback for browsers that don't support the <video> element -->
        <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
      </video>
    </div>
  </div>
</template>

<style>
  @import "../assets/css/watch-content.css";
</style>

<script>
  import HTTP from "../components/http";

  export default {
    name: "detail-watch-content",
    data() {
      return {
        model: {}
      };
    },
    created() {
      var id = this.$route.params.id;
      HTTP.get('/contents/' + id)
              .then(response => (this.model = response.data));
    }
  }
</script>