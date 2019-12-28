<template>
  <div class="content">
<!--    <img alt="Vue logo" src="../assets/logo.png">-->
<!--    <HelloWorld msg="Welcome to Your Vue.js App"/>-->
    <div class="info-content">

      <div class="info-hello">
        <img src="../assets/img/hello.gif" alt="gtfo">
      </div>
      <div class="info-popular">
        <div class="info-popular-name">
          <a href="#">Популярное</a>
        </div>
        <div class="info-popular-titles">
          <div v-for="item in models" :key="item.id" class="watch-item">
              <router-link :to="{name: 'contents', params: {id: item.id}}">
                <a href="#/watch" class="info-popular-title">
                  <div class="title-img">
                    <img src="../assets/img/cover.png" alt="gtfo">
                  </div>
                  <p>{{item.title}}</p>
                </a>
              </router-link>
          </div>
        </div>
      </div>
    </div>
    <div class="main-content">
      <div class="studio-content">
        <div class="studio-butt">
          <div class="studio-button">
            <div class="studio-logo">
              <img class="studio-pic" src="../assets/img/adult-swim-2.png" alt="gtfo">
            </div>
          </div>
          <img class="studio-name" src="../assets/img/adult-swim.png" alt="gtfo">
        </div>
        <div class="studio-butt">
          <div class="studio-button">
            <div class="studio-logo">
              <img class="studio-pic" src="../assets/img/adult-swim-2.png" alt="gtfo">
            </div>
          </div>
          <img class="studio-name" src="../assets/img/adult-swim.png" alt="gtfo">
        </div>
        <div class="studio-butt">
          <div class="studio-button">
            <div class="studio-logo">
              <img class="studio-pic" src="../assets/img/adult-swim-2.png" alt="gtfo">
            </div>
          </div>
          <img class="studio-name" src="../assets/img/adult-swim.png" alt="gtfo">
        </div>
        <div class="studio-butt">
          <div class="studio-button">
            <div class="studio-logo">
              <img class="studio-pic" src="../assets/img/adult-swim-2.png" alt="gtfo">
            </div>
          </div>
          <img class="studio-name" src="../assets/img/adult-swim.png" alt="gtfo">
        </div>
        <div class="studio-butt">
          <div class="studio-button">
            <div class="studio-logo">
              <img class="studio-pic" src="../assets/img/adult-swim-2.png" alt="gtfo">
            </div>
          </div>
          <img class="studio-name" src="../assets/img/adult-swim.png" alt="gtfo">
        </div>
      </div>
      <div class="info-popular-name">
        <a href="#">Обновления</a>
        <a href="#">Новинки</a>
        <a href="#">Премьеры</a>
      </div>
      <div id="mults" class="video-content">
        <div class="video-category">
          <a href="#">Мультфильмы</a>
        </div>
        <div id="carousel-card-1" class="carousel-card carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="container">
                <div class="my-row row flex-nowrap">

                  <div v-for="item in models" :key="item.id" class="watch-item">
                    <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assets/img/cover.png">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <h3>{{item.title}}</h3>
                              <router-link :to="{name: 'contents', params: {id: item.id}}">
                                <button type="submit" class="btn btn-default">Смотреть</button>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <a class="carousel-control-prev" href="#carousel-card-1" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-card-1" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

        </div>
      </div>
      <div id="anime" class="video-content">
        <div class="video-category">
          <a href="#">Аниме</a>
        </div>
        <div id="carousel-card-2" class="carousel-card carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="container">
                <div class="my-row row flex-nowrap">

                  <div v-for="item in models" :key="item.id" class="watch-item">
                    <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assets/img/cover.png">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <h3>{{item.title}}</h3>
                              <router-link :to="{name: 'contents', params: {id: item.id}}">
                                <button type="submit" class="btn btn-default">Смотреть</button>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <a class="carousel-control-prev" href="#carousel-card-2" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-card-2" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

        </div>
      </div>
      <div id="serials" class="video-content">
        <div class="video-category">
          <a href="#">Сериалы</a>
        </div>
        <div id="carousel-card-3" class="carousel-card carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="container">
                <div class="my-row row flex-nowrap">

                  <div v-for="item in models" :key="item.id" class="watch-item">
                    <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assets/img/cover.png">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <h3>{{item.title}}</h3>
                              <router-link :to="{name: 'contents', params: {id: item.id}}">
                                <button type="submit" class="btn btn-default">Смотреть</button>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <a class="carousel-control-prev" href="#carousel-card-3" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-card-3" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

        </div>
      </div>
      <div id="films" class="video-content">
        <div class="video-category">
          <a href="#">Фильмы</a>
        </div>
        <div id="carousel-card-4" class="carousel-card carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="container">
                <div class="my-row row flex-nowrap">

                  <div v-for="item in models" :key="item.id" class="watch-item">
                    <div class="col-sm-3">
                      <div class="flip">
                        <div class="card">
                          <div class="face front">
                            <div class="inner">
                              <img src="../assets/img/cover.png">
                            </div>
                          </div>
                          <div class="face back">
                            <div class="inner text-center">
                              <h3>{{item.title}}</h3>
                              <router-link :to="{name: 'contents', params: {id: item.id}}">
                                <button type="submit" class="btn btn-default">Смотреть</button>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <a class="carousel-control-prev" href="#carousel-card-4" role="button" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-card-4" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>
</template>

<style>
  @import "../assets/css/main-content.css";

  .watch-item {
    margin-left: 2%;
    margin-right: 2%;
  }

</style>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'

import HTTP from "../components/http";

export default {
  name: "content",
  data() {
    return {
      models: []
    };
  },
  created() {
    HTTP.get('/contents')
            .then(response => (this.models = response.data));
  }
}
</script>
