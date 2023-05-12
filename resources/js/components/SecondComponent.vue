<template>
<div id="sec">
    
        <video id="vid" autoplay loop muted disablePictureInPicture>
            <source src="video/stars.mp4" />
        </video>
    
    <div id="form_div">
        <entryform-component></entryform-component>
    </div>

</div>
</template>

<script>
import EntryformComponent from './EntryformComponent.vue';
export default {
    components: {
        EntryformComponent
    }
}
</script>

<style scoped>
#sec {
    height:97vh;
    width: 99vw;
    /* overflow:hidden; */
    border-style: groove;
    border-color:black;
}

#vid {
    height: 100%;
    width: 100%;
    z-index: -1;
    object-fit: fill;

}

#form_div{
    position:absolute;
    top:100px;
    left:200px;
}
</style>
