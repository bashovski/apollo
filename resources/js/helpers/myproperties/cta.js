/**
 * This helper service regarding MyProperties component is holding string values for the Call-to-action button
 * which will dynamically call different actions depending on the state of the component and the user's made progress.
 *
 * Therefore, keys that hold null-value are apostrophizing that the CTA button won't be displayed in that specific case.
 * Also, there's a need to mention that keys listed below are placed in order of expected flow.
 */
export default {
    propertyNotSelected: null,
    propertySelected: null,
    propertyMadeChanges: `Apply Changes`
}
