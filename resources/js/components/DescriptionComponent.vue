<template>
    <div id="description">
    <h1 style="color:white">Description about webpage</h1>
    <video id="vid" autoplay loop muted disablePictureInPicture>
            <source src="video/stars.mp4" />
        </video>
</div>
</template>
<script>


</script>
<style scoped>
#vid {
    height: 100%;
    width: 100%;
    z-index: -1;
    object-fit: fill;
}
#descrition{
    height:97vh;
    width: 99vw;
    /* overflow:hidden; */
    border-style: groove;
    border-color:black;
}
</style>