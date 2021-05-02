var app = new Vue({
    el: '#root',
    data: {
        selectAuthor: 'Init',
        albumAuthors: [],
        albums: [],
        windowLocation: `${window.location.protocol}//${window.location.hostname}:${window.location.port}/php-ajax-dischi/server_2.php`
    },

    methods: {
        // CHIAMATA AXIOS PER POPOLAMENTO ALBUM CON PHP
        inputAuthor: function(selectAuthor) {
            console.log(selectAuthor);
            axios
                .get(`${this.windowLocation}?action=${selectAuthor}`)
                .then((album) => {
                    this.albums = album.data;
                });
        }
    },

    mounted() {

        // CHIAMATA AXIOS PER POPOLAMENTO AUTORI CON VUE
        axios
            .get(`${this.windowLocation}?action=${this.selectAuthor}`)
            .then((album) => {
                this.albumAuthors.push('All');
                album.data.forEach(element => {
                    if (!this.albumAuthors.includes(element.author)) {
                        this.albumAuthors.push(element.author);
                    }
                });
            });
    }
});