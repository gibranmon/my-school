<template>
    <div>
        <section>
            <h1>Listado de Alumnos</h1>
            <o-table :data="students">
                <o-table-column
                    field="id"
                    label="#"
                    v-slot="rowInfo">
                    {{ rowInfo.row.id }}
                </o-table-column>
                <o-table-column
                    field="name"
                    label="Nombre"
                    v-slot="rowInfo">
                    {{ rowInfo.row.name }}
                </o-table-column>
                <o-table-column
                    field="last_name"
                    label="Apellidos"
                    v-slot="rowInfo">
                    {{ rowInfo.row.last_name }}
                </o-table-column>
                <o-table-column
                    field="age"
                    label="Edad"
                    v-slot="rowInfo">
                    {{ rowInfo.row.age }}
                </o-table-column>
                <o-table-column
                    field="school_grade"
                    label="Grado escolar"
                    v-slot="rowInfo">
                    {{ rowInfo.row.school_grade }}
                </o-table-column>
                <o-table-column
                    field="school_grade"
                    label="Grado escolar"
                    v-slot="rowInfo">
                    {{ rowInfo.row.school_grade }}
                </o-table-column>
                <o-table-column
                    field="state"
                    label="Dirección principal"
                    v-slot="rowInfo">
                    {{ rowInfo.row.direction.line_one }}
                </o-table-column>
            </o-table>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            students: [],
            isLoading: true
        }
    },
    mounted() {
        console.log('here');
        console.log('here');
        this.$axios.get('/addresses/students/list').then((res) => {
            console.log(res.data.data);
            this.students = res.data.data;
            this.isLoading = false;
        })
    }
}
</script>