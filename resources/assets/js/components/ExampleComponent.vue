<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1>Users</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users">
                            <td>
                                {{ user.name }}
                            </td>
                            <td>
                                {{ user.email }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import firebase from 'firebase';

    export default {
        data () {
            return {
                users: []
            }
        },
        mounted() {
            firebase.initializeApp(window.firebaseConfig);
            // Initialize firebase realtime database.
            firebase.database().ref('users/').on('value', (snapshot) => {
                this.users = snapshot.val();
            });
        }
    }
</script>
