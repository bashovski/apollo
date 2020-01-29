<template>
    <div class="apollo-rounded-icon" :style="getBackground + getSize">
        <img :src="getSrc" :alt="getAlt" :width="getWidth - 8" :height="getHeight - 8">
    </div>
</template>

<script>
    const _DEFAULT_WIDTH = 32;
    const _DEFAULT_HEIGHT = 32;
    const _DEFAULT_BACKGROUND = '#FE4A49';

    export default {
        name: "RoundedIcon",
        props: [
            'src',
            'alt',
            'width',
            'height',
            'background'
        ],
        /**
         * src is mandatory, otherwise RoundedIcon component will not be rendered.
         * If omitted, background, width and height will be set according to the already predefined default values.
         * @returns {{src: *, alt: *, width: *, height: *, backgroundColor: *}}
         */
        computed: {
            getSrc() {
                return this.src;
            },
            getAlt() {
                return this.alt ? this.alt : '';
            },
            getWidth() {
                return this.width ? this.width : _DEFAULT_WIDTH;
            },
            getHeight() {
                return this.height ? this.height : _DEFAULT_HEIGHT;
            },
            getBackground() {
                const background = this.background ? this.background : _DEFAULT_BACKGROUND;
                return (`background: ${background};`);
            },
            getSize() {
                const maxWidth = `max-width: ${this.width ? this.width : _DEFAULT_WIDTH}px;`,
                    maxHeight = `max-height: ${this.height ? this.height : _DEFAULT_HEIGHT}px;`;

                return (`${maxWidth} ${maxHeight}`);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .apollo-rounded-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        max-width: min-content;
        max-height: min-content;
        padding: 4px;

        & > img {
            padding-right: 2px;
        }
    }
</style>
