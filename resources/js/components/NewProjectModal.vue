<template>
  <modal
  :top="40"
  :right="400"
  :width="550"
  :height="550"
    name="new-project"
    classes="p-10 add-modal text-white rounded-lg shadow mr-auto"
    height="auto"
  >
    <h1 class="text-center text-5xl my-4 font-bold text-white tracking-wider font-extrabold">Add New habit</h1>

    <form @submit.prevent="submit">
      <div class="flex">
        <div class="flex-1 ml-4">
          <div class="mb-4">
            <input 
              type="text"
              name="title"
              id="title"
              class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-white block w-full rounded text-lg focus:outline-none focus:shadow-lg"
              :class="form.errors.title ? 'border-red-400' : 'border-gray-300'"
              placeholder="My new habit"
              v-model="form.title"
            />
            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.title[0]"
            ></span> 
          </div>
          <div class="mb-4">
            <select name="color" id="color" class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-white block w-full rounded text-lg focus:outline-none focus:shadow-lg" v-model="form.critical" :class="form.errors.critical ? 'border-red-400' : 'border-gray-300'">

              <option value="true">Critical</option>
              <option value="false">Non-critical</option>
            </select>

            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.title[0]"
            ></span>
          </div>
          <div class="mb-4">
            <select name="color" id="color" class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-white block w-full rounded text-lg focus:outline-none focus:shadow-lg" v-model="form.color" :class="form.errors.color ? 'border-red-400' : 'border-gray-300'">

              <option value="spiritual">Spiritual</option>
              <option value="physical">physical</option>
              <option value="emotional">emotional</option>
              <option value="mental">mental</option>
              <option value="work">work</option>
              <option value="family">family</option>
              <option value="friends">friends</option>
            </select>

            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.title[0]"
            ></span>
          </div>
          <div class="mb-4">
            <textarea
              name="description"
              id="description"
              class="border-b-4 border-gray-bg p-2 text-sm bg-transparent text-white block w-full rounded text-lg focus:outline-none focus:shadow-lg"
              :class="form.errors.description ? 'border-red-400' : 'border-gray-300'"
              placeholder="Why do I want to do this?"
              rows="3"
              v-model="form.description"
            ></textarea>
            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.description[0]"
            ></span>
          </div>
        </div>
      </div>
      <footer class="flex justify-around">
        <button type="submit" class="button rounded-lg bg-gray-bg p-4 p-4 text-orange-500 text-2xl w-2/5 hover:shadow-xl font-extrabold hover:bg-gray-light">Add</button>

        <button
          type="button"
          class="button rounded-lg border-3 border-gray-bg bg-transparent p-4 text-2xl w-2/5 hover:shadow-xl font-extrabold hover:bg-gray-light"
          @click="$modal.hide('new-project')"
        >Cancel</button>
      </footer>
    </form>
  </modal>
</template>


<script>
import RevalForm from "./RevalForm";
export default {
  data() {
    return {
      form: new RevalForm({
        title: "",
        color: "",
        critical: "",
        description: "",
        tasks: [{ body: "" }]
      })
    };
  },
  methods: {
    addTask() {
      this.form.tasks.push({ body: "" });
    },

    async submit() {
      if (!this.form.tasks[0].body) {
        delete this.form.originalData.tasks;
      }
      this.form
        .submit("/projects")
        .then(response => (location = response.data.message));
      // try {
      //   location = (await axios.post("/projects", this.form)).data.message;
      // } catch (error) {
      //   this.errors = error.response.data.errors;
      // }

      // let response = await axios
      //   .post("/projects", this.form)
      //   .then(response => {
      //     location = response.data.message;
      //   })
      //   .catch(error => {
      //     this.errors = error.response.data.errors;
      //   });
    }
  }
};
</script>
