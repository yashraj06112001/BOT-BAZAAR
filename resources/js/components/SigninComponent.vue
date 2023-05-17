<template>
  <div id="signin">
    <h1 class="form_heading">SIGN IN</h1>
    <video id="vid" autoplay loop muted disablePictureInPicture>
      <source src="video/stars.mp4" />
    </video>
    <form id="form_div">
      <label for="name">name of the user</label>
      <input
        type="text"
        placeholder="enter the name of the user"
        class="form_input"
        id="name"
        v-model="name"
      />
      <label for="email">email</label>
      <input
        type="email"
        placeholder="enter your email"
        class="form_input"
        id="email"
        v-model="email"
      />
      <label for="password">password</label>
      <input
        type="password"
        id="password"
        class="form_input"
        placeholder="enter your password"
        v-model="password"
      />
      <button v-on:click.prevent="submitdata">submit</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  data: function () {
    return {
      name: "abc",
      email: "abc@abc",
      password: "123"
    };
  },
  methods: {
    submitdata: async function () {
      let result=axios.post("http://127.0.0.1:8000/api/check",{
        email:this.email,
        name:this.name,
        password:this.password
      })
      .then(response => {
        // If login is successful, redirect to the dashboard page
        if (response.data.success) {
          window.location.href = '/download';
        }
      })
      .catch(error => {
        // If login fails, display an error message
        alert(error.response.data.message);
      });
    }
  }
}
</script>
<style scoped>
.form_input {
  padding: 10px;
  border-radius: 5px;
  border: none;
  margin-bottom: 10px;
  width: 100%;
}
.form_heading {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}
#vid {
  height: 100%;
  width: 100%;
  z-index: -1;
  object-fit: fill;
}
#signin {
  height: 97vh;
  width: 99vw;
  /* overflow:hidden; */
  border-style: groove;
  border-color: black;
}
#form_div {
  position: absolute;
  top: 100px;
  left: 200px;
}
</style>