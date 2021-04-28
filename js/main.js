var app = new Vue({
    el: '#root',
    data: {
        albumList: ['ciao'],
        windowLocation: `${window.location.protocol}//${window.location.hostname}:${window.location.port}/php-ajax-dischi/server.php`
    },

    mounted() {
        axios
            .get(this.windowLocation)
            .then((album) => {
                this.albumList = album.data;
            });
    }
});