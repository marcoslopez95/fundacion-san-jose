<template>
    <div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-tittle" id="exampleModalLabel">¿Eres Representante de alguna persona?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label class="radio-inline">
                            <input type="radio" name="rep" value="s">Si
                            <input type="radio" name="rep" value="n">No
                        </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
        mounted() {
            console.log('pokemon creado')
        }
    }
</script>

<style>

</style>


