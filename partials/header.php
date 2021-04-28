<header>
    <img class="logo" src="img/spotify_logo.svg" alt="">
    <select v-model="selectAuthor" @change="inputAuthor(selectAuthor)">
            <option v-for="authorItem in albumAuthors" :value="authorItem">{{authorItem}}</option>
    </select>
</header>