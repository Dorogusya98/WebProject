<template>
    <div class="form-wrapper" id="wrapper-signup" @submit.prevent="signUp">
        <img src='../assets/img/f.png' alt='bg2' />
        <div class="content-wrapper" id="content-signin">
            <h1>Добро Пожаловать!</h1>
            <form class="form-login">
                <label>
                    <input type="email" name="email" placeholder="Email" class="input-email"  v-model="email" required="required"/>
                </label>
                <label>
                    <input type="text" name="login" placeholder="Логин" class="input-username" v-model="login" pattern="[0-9A-Za-z]+"/>
                </label>
                <label>
                    <input type="password" name="password" placeholder="Пароль" class="input-password" v-model="password" required pattern="[0-9A-Za-z]+"/>
                </label>
                <button type="submit" class="btn-login">Регистрация</button>
            </form>
        </div>
    </div>
</template>

<script>
    import HTTP from "../components/http";

    export default {
        name: 'wrapper-signup',
        data () {
            return {
                login: '',
                email: '',
                password: '',
                role: 0
            }
        },
        methods: {
            signUp: function () {
                HTTP.post('/user/signup', {
                    login: this.login,
                    email: this.email,
                    password: this.password,
                    role: 1
                }).then((response) => {
                    localStorage.setItem('user', JSON.stringify(response.data))
                    location.href = '/'
                }, (error) => {
                    this.result = error.response.data.password
                })
            }
        }
    }
</script>

<style scoped>

</style>