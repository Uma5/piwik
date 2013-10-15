<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package CoreVisualizations
 */

namespace Piwik\Plugins\CoreVisualizations\Visualizations\HtmlTable;

use Piwik\Visualization\Config as VisualizationConfig;
/**
 * DataTable Visualization that derives from HtmlTable and sets show_extra_columns to true.
 */
class Config extends VisualizationConfig
{

    /**
     * If this property is set to true, subtables will be shown as embedded in the original table.
     * If false, subtables will be shown as whole tables between rows.
     *
     * Default value: false
     */
    public $show_embedded_subtable = false;

    /**
     * Controls whether the entire DataTable should be rendered (including subtables) or just one
     * specific table in the tree.
     *
     * Default value: false
     */
    public $show_expanded = false;

    /**
     * When showing an expanded datatable, this property controls whether rows with subtables are
     * replaced with their subtables, or if they are shown alongside their subtables.
     *
     * Default value: false
     */
    public $replace_row_with_subtable = false;

    /**
     * Controls whether any DataTable Row Action icons are shown. If true, no icons are shown.
     *
     * @see also self::DISABLE_ROW_EVOLUTION
     *
     * Default value: false
     */
    public $disable_row_actions = false;

    /**
     * Controls whether the row evolution DataTable Row Action icon is shown or not.
     *
     * @see also self::DISABLE_ROW_ACTIONS
     *
     * Default value: false
     */
    public $disable_row_evolution = false;

    /**
     * If true, the 'label', 'nb_visits', 'nb_uniq_visitors' (if present), 'nb_actions',
     * 'nb_actions_per_visit', 'avg_time_on_site', 'bounce_rate' and 'conversion_rate' (if
     * goals view is not allowed) are displayed.
     *
     * Default value: false
     */
    public $show_extra_columns = false;

    /**
     * If true, conversions for each existing goal will be displayed for the visits in
     * each row.
     *
     * Default value: false
     */
    public $show_goals_columns = false;

    /**
     * If true, subtables will not be loaded when rows are clicked, but only if the
     * 'show_goals_columns' property is also true.
     *
     * @see also self::SHOW_GOALS_COLUMNS
     *
     * Default value: false
     */
    public $disable_subtable_when_show_goals = false;

    /**
     * Controls whether the summary row is displayed on every page of the datatable view or not.
     * If false, the summary row will be treated as the last row of the dataset and will only visible
     * when viewing the last rows.
     *
     * Default value: false
     */
    public $keep_summary_row = false;

    /**
     * If true, the summary row will be colored differently than all other DataTable rows.
     *
     * @see also self::KEEP_SUMMARY_ROW
     *
     * Default value: false
     */
    public $highlight_summary_row = false;

    public function __construct()
    {
        parent::__construct();

        $this->enable_sort       = true;
        $this->datatable_js_type = 'DataTable';
    }

}