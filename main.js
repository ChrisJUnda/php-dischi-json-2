const { createApp } = Vue;

createApp({
    data() {
        return {
            mainServerData: "http://localhost/EX-45-BOOLEAN/php-dischi-json/server.php",

            title: "BAD BUNNY'S ALBUMS",

            data: {},
        };
    },
    methods: {
        getServerInfo() {
            axios.get(this.mainServerData).then((response) => {
                console.log(response);
                this.data = response.data;
            });
        },
    },
    created() {
        this.getServerInfo();
        console.log(this.data);
    },
}).mount("#app");