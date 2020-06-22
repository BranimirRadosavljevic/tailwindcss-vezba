<template>
    <header class="bg-gray-800 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
        <div class="flex items-center justify-between px-4 py-3 sm:p-0">
            <div>
                <img
                    class="h-8 "
                    src="/img/logo-inverted.svg"
                    alt="Workcation"
                />
            </div>
            <div class="sm:hidden">
                <button
                    type="button"
                    class="block text-gray-500 hover:text-white focus:text-white focus:outline-none"
                    @click="isOpen = !isOpen"
                >
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path
                            v-if="isOpen"
                            fill-rule="evenodd"
                            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
                        />
                        <path
                            v-if="!isOpen"
                            fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                        />
                    </svg>
                </button>
            </div>
        </div>
        <div :class="isOpen ? 'block' : 'hidden'" class="sm:block">
            <div class="px-2 pb-4 pt-2 sm:flex sm:p-0 sm:items-center">
                <a href="#" class="block px-2 py-1 text-white font-semibold hover:bg-gray-700 rounded">List your property</a>
                <a href="#" class="block mt-1 px-2 py-1 text-white font-semibold hover:bg-gray-700 rounded sm:mt-0">Trips</a>
                <a href="#" class="block mt-1 px-2 py-1 text-white font-semibold hover:bg-gray-700 rounded sm:mt-0">Messages</a>
                <AccountDropdown class="hidden sm:block sm:ml-6"/>
            </div>
            <div class="px-4 py-5 border-t border-gray-700 sm:hidden">
                <div class="flex items-center">
                    <img
                        src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                        alt=""
                        class="h-8 w-8 rounded-full border-2 border-gray-500 object-cover"
                    />
                    <span class="ml-3 text-white">Jack Dee</span>
                </div>
                <div class="mt-4">
                    <a href="#" class="block text-gray-400 hover:text-white">Account settings</a>
                    <a href="#" class="mt-2 block text-gray-400 hover:text-white">Support</a>
                    <a href="#" class="mt-2 block text-gray-400 hover:text-white">Sign out</a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import AccountDropdown from './AccountDropdown'
export default {
    components: { AccountDropdown },

    data() {
        return {
            isOpen: false
        };
    }
};
</script>
