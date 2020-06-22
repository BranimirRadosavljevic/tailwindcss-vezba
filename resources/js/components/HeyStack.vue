<template>
    <div class="relative bg-gray-300 text-gray-800 antialiased flex flex-col justify-end mt-32">
        
        <div v-on-clickaway="hideMenu" class="bg-gray-400 px-8 py-8 flex justify-center">

                <ul class="absolute -mt-32 space-y-2" style="bottom:124px;">
    
                    <transition v-for="email in emails" :key="email.id" name="fade">
    
                    <li v-show="visible" class="transform" :class="email.classes">
                        <a href="#" class="bg-white hover:bg-gray-100 w-80 shadow-md border rounded-lg px-4 py-4 flex items-center">
                            <img :src="email.image" alt="avatar" class="rounded-full w-10 h-10">
                            <div class="ml-4">
                                <div class="font-semibold">{{email.subject}}</div>
                                <div class="text-left text-gray-700">{{email.sender}}</div>
                            </div>
                        </a>
                    </li>

                    </transition>
                </ul>

            <button @click="visible = !visible" class="bg-white hover:bg-gray-100 w-80 shadow-md border rounded-lg px-4 py-4 flex items-center -mt-16 z-20">
                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/okcoker/128.jpg" alt="avatar" class="rounded-full w-10 h-10">
                <div class="ml-4">
                    <div class="font-semibold">Hey Email Invite</div>
                    <div class="text-left text-gray-700">Jason Faried</div>
                </div>
            </button>
        </div>        
    </div>
</template>

<script>
import {mixin as clickaway} from 'vue-clickaway';
export default {
    mixins: [clickaway],
    data() {
        return {
            visible: false,
            emails: [
                {
                    id: 1,
                    subject: 'Basketball Camp',
                    sender: 'Linwood Schumm',
                    image: 'https://s3.amazonaws.com/uifaces/faces/twitter/kurtinc/128.jpg',
                    classes: 'translate-x-16 rotate-12',
                },
                {
                    id: 2,
                    subject: 'International Response',
                    sender: 'Elise Batz',
                    image: 'https://s3.amazonaws.com/uifaces/faces/twitter/terpimost/128.jpg',
                    classes: ' translate-x-10 rotate-10',
                },
                {
                    id: 3,
                    subject: 'Brand',
                    sender: 'Kiley Lemke',
                    image: 'https://s3.amazonaws.com/uifaces/faces/twitter/edhenderson/128.jpg',
                    classes: 'translate-x-6 rotate-8',
                },
                {
                    id: 4,
                    subject: 'Planner',
                    sender: 'Gene Connelly',
                    image: 'https://s3.amazonaws.com/uifaces/faces/twitter/patrickcoombe/128.jpg',
                    classes: 'translate-x-4 rotate-6',
                },
                {
                    id: 5,
                    subject: 'Gorgeous Plastic Chair',
                    sender: 'Jessika Moore',
                    image: 'https://s3.amazonaws.com/uifaces/faces/twitter/lmjabreu/128.jpg',
                    classes: 'translate-x-2 rotate-4',
                },
                {
                    id: 6,
                    subject: 'Intelligent',
                    sender: 'Luna Haley',
                    image: 'https://s3.amazonaws.com/uifaces/faces/twitter/laurengray/128.jpg',
                    classes: 'translate-x-1 rotate-2',
                },
            ]
        }
    },
    methods: {
        hideMenu() {
            this.visible = false
        }
    },
}
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: all .15s ease-in;
    }

    .fade-enter, .fade-leave-to {
        transform: translate(0px, 100px) rotate(0deg);
        opacity: 0;
    }
</style>