<template>
    <v-app>
        <v-navigation-drawer app dark v-model="menuDrawer">
            <v-list dense>
                <v-list-item two-line>
                    <v-list-item-avatar>
                        <img alt="avatar" src="https://randomuser.me/api/portraits/lego/7.jpg">
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title>Witaj, {{$page.user.name}}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-divider />
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-home</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Strona główna</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-action>
                        <v-icon>mdi-email</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                        <v-list-item-title>Kontakt</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar app color="indigo" dark>
            <v-app-bar-nav-icon @click.stop="menuDrawer = !menuDrawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Nazwa projektu</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon @click="logout">
                <v-icon>mdi-logout</v-icon>
            </v-btn>
        </v-app-bar>
        <v-main>
            <slot></slot>
        </v-main>
    </v-app>
</template>

<script>
    export default {
        name: "Layout",
        data() {
            return {
                menuDrawer: false
            }
        },
        methods: {
            logout: function () {
                this.$inertia.post('/logout')
            }
        }
    }
</script>

<style scoped>

</style>
