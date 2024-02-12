panel.plugin("architecturelandinitiative/blocks", {
  blocks: {
    medialink: {
      template: `
        <div class="input-card">
            <k-writer class="input-fronttext"
              v-bind="field('fronttext')"
              :value="content.fronttext"
              @input="update({ fronttext: $event })">
            </k-writer>
        </div>
      `
    },
  }
});