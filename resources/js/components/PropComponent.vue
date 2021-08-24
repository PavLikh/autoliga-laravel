<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="url in data">
                            <td>{{ url.name_ru }}</td>
                            <td>{{ url.address }}</td>
                        </tr>
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'data'
        ],
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                console.log(this.data);
            }
        }
    }
</script>