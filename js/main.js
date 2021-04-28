var app = new Vue({
    el: '#root',
    data: {
        selectAuthor: 'All',
        albumAuthors: ['All'],
        albumListBackEnd: [],
        albumListFrontEnd: [],
        windowLocation: `${window.location.protocol}//${window.location.hostname}:${window.location.port}/php-ajax-dischi/server.php`
    },

    methods: {
        inputAuthor: function(selectAuthor) {
            if (selectAuthor == 'All') {
                this.albumListFrontEnd = this.albumListBackEnd;
            } else {
                this.albumListFrontEnd = this.albumListBackEnd.filter(album => album.author == selectAuthor);
            }
        }

    },

    mounted() {
        axios
            .get(this.windowLocation)
            .then((album) => {
                this.albumListBackEnd = album.data;
                this.albumListFrontEnd = album.data;
                album.data.forEach(element => {
                    if (!this.albumAuthors.includes(element.author)) {
                        this.albumAuthors.push(element.author);
                        // console.log(this.albumListBackEnd);
                    }
                });

            });
    }
});