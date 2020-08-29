<template>
    <v-app>
        <v-main>
            <v-container class="fill-height" fluid>
                <v-row align="center" justify="center">
                    <v-col cols="12" md="4" sm="8">
                        <v-card class="elevation-12">
                            <v-toolbar color="primary" dark flat>
                                <v-toolbar-title>Zaloguj się do systemu</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field label="Nazwa użytkownika" name="login" v-model="user.username" prepend-icon="mdi-account" type="text"></v-text-field>
                                    <v-text-field id="password" label="Hasło" v-model="user.password" name="password" prepend-icon="mdi-lock" type="password"></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="login">Zaloguj</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
    export default {
        name: "Login",
        layout: "None",
        data() {
            return {
                user: {
                    username: '',
                    password: ''
                }
            }
        },
        methods: {
            login: function() {
                this.$inertia.post('/login', this.user);
            }
        }
    }
</script>

<style scoped>

</style>
