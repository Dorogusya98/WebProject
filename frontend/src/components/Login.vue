<template>
    <div class="form-wrapper" id="wrapper-login" @submit.prevent="signIn">
        <img src='../assets/img/f.png' alt='bg1' />
        <div class="content-wrapper" id="content-login">
            <h1>С возвращением!</h1>
            <form class="form-login">
                <label>
                    <input autofocus="" name="login" type="text" placeholder="Логин" class="input-username" v-model="login" required pattern="[A-Za-z]+"/>
                </label>
<!--                <div class="error text-muted text-center" style="font-size: small" v-if="$v.username.$anyError && !$v.username.required">Заполните «Имя пользователя»</div>-->
<!--                <div class="error text-muted text-center"  style="font-size: small" v-if="$v.username.$anyError && !$v.username.alpha">Имя пользователя должно состоять только из латинских букв и цифр</div>-->
                <label>
                    <input type="password" name="password" placeholder="Пароль" class="input-password" v-model="password" required pattern="[0-9A-Za-z]+"/>
                </label>
<!--                <div class="error text-muted text-center" style="font-size: small" v-if="$v.password.$anyError && !$v.password.required">Заполните «Пароль»</div>-->
<!--                <div class="error text-muted" v-if="result">{{result}}</div>-->
                <button type="submit" class="btn-login">Вход</button>
            </form>
        </div>
    </div>
</template>

<script>
    import HTTP from "../components/http";
    import { required, alpha } from 'vuelidate/src/validators'
    export default {
        name: "wrapper-login",
        data () {
            return {
                login: '',
                password: '',
                result: ''
            }
        },
        validations: {
            login: {
                required,
                alpha
            },
            password: {
                required
            }
        },
        methods: {
            signIn () {
                this.$v.$touch()
                if (!this.$v.$invalid) {
                    this.auth()
                }
            },
            auth () {
                this.result = ''

                HTTP.post('/user/signin', {
                    login: this.login,
                    password: this.password
                }).then((response) => {
                    localStorage.setItem('user', JSON.stringify(response.data))
                    location.reload()
                }, (error) => {
                    this.result = error.response.data.password
                })
            }
        }
    }
</script>

