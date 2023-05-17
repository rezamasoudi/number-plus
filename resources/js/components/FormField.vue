<template>
    <DefaultField
        :errors="errors"
        :field="field"
        :full-width-content="fullWidthContent"
        :show-help-text="showHelpText"
    >
        <template #field>
            <vue-number :id="field.attribute"
                        v-model="value"
                        :class="errorClasses"
                        :placeholder="field.name"
                        class="w-full form-control form-input form-input-bordered"
                        type="text"
                        v-bind="field.options"
                        @change="onTextChanged"
                        @input="onchange"
            />

            <p v-if="response" class="help-text help-text text-primary-500 mt-2"
               style="font-style: normal" v-text="response"></p>

        </template>
    </DefaultField>
</template>

<script>
import {DependentFormField, HandlesValidationErrors} from 'laravel-nova'
import {component as VueNumber} from '@coders-tm/vue-number-format'

export default {
    mixins: [DependentFormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    components: {VueNumber},

    data: function () {
        return {
            response: ""
        };
    },

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            this.fillIfVisible(formData, this.field.attribute, this.value || '')
        },

        onchange(event) {
            const unmaskedValue = event.target.unmasked
            if (this.field) {
                this.emitFieldValueChange(this.field.attribute, unmaskedValue)
            }
        },

        onTextChanged(event) {
            if (this.field.route) {

                const unmaskedValue = event.target.unmasked
                if (!unmaskedValue?.trim()) return;

                Nova.request().get(`${this.field.route}?number=${unmaskedValue}`).then(response => {
                    this.response = response.data;
                });
            }
        }

    },
}
</script>
