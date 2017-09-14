<?php

require_once dirname( __FILE__ ) . '/font.php';

/**
 * Academicons
 *
 * @package Icon_Picker
 * @author	Stefano Bennati <st.bennati@gmail.com>
 */
class Icon_Picker_Type_Academicons extends Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var	   string
	 */
	protected $id = 'ai';

	/**
	 * Icon type name
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var	   string
	 */
	protected $name = 'Academicons';

	/**
	 * Icon type version
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var	   string
	 */
	protected $version = '1.8.0';

	/**
	 * Stylesheet ID
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var	   string
	 */
	protected $stylesheet_id = 'academicons';


	/**
	 * Get icon groups
	 *
	 * @since  0.1.0
	 * @return array
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'main',
				'name' => __( 'Main', 'icon-picker' ),
			),
			array(
				'id'   => 'pub',
				'name' => __( 'Publisher', 'icon-picker' ),
			),
			array(
				'id'   => 'bib',
				'name' => __( 'Bibliography manager', 'icon-picker' ),
			),
			array(
				'id'   => 'preprint',
				'name' => __( 'Preprint service', 'icon-picker' ),
			),
		);

		/**
		 * Filter genericon groups
		 *
		 * @since 0.1.0
		 * @param array $groups Icon groups.
		 */
		$groups = apply_filters( 'icon_picker_ai_groups', $groups );

		return $groups;
	}


	/**
	 * Get icon names
	 *
	 * @since  0.1.0
	 * @return array
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'main',
				'id'	=> ' ai-academia',
				'name'	=> __( 'Academia', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-acclaim',
				'name'	=> __( 'Acclaim', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-acm',
				'name'	=> __( 'ACM', 'icon-picker' ),
			),
			array(
				'group' => 'ads',
				'id'	=> ' ai-ads',
				'name'	=> __( 'ADS', 'icon-picker' ),
			),
			array(
				'group' => 'preprint',
				'id'	=> ' ai-arxiv',
				'name'	=> __( 'Arxiv', 'icon-picker' ),
			),
			array(
				'group' => 'preprint',
				'id'	=> ' ai-biorxiv',
				'name'	=> __( 'Biorxiv', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-ceur',
				'name'	=> __( 'Ceur', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-courser',
				'name'	=> __( 'Coursera', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-dataverse',
				'name'	=> __( 'Dataverse', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-dblp',
				'name'	=> __( 'DBLP', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-depsy',
				'name'	=> __( 'Depsy', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-doi',
				'name'	=> __( 'DOI', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-dryad',
				'name'	=> __( 'Dryad', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-figshare',
				'name'	=> __( 'Figshare', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-google-scholar',
				'name'	=> __( 'Google Scholar', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-ieee',
				'name'	=> __( 'IEEE', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-impactstory',
				'name'	=> __( 'Impactstory', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-inspire',
				'name'	=> __( 'Inspire', 'icon-picker' ),
			),
			array(
				'group' => 'bib',
				'id'	=> ' ai-mendeley',
				'name'	=> __( 'Mendeley', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-open-access',
				'name'	=> __( 'Open Access', 'icon-picker' ),
			),
			array(
				'group' => 'bib',
				'id'	=> ' ai-orcid',
				'name'	=> __( 'ORCID', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-osf',
				'name'	=> __( 'OSF', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-overleaf',
				'name'	=> __( 'Overleaf', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-philpapers',
				'name'	=> __( 'Philpapers', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-piazza',
				'name'	=> __( 'Piazza', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-publons',
				'name'	=> __( 'Publons', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-pubmed',
				'name'	=> __( 'Pubmed', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-researchgate',
				'name'	=> __( 'ResearchGate', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-scirate',
				'name'	=> __( 'Scirate', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-springer',
				'name'	=> __( 'Springer', 'icon-picker' ),
			),
			array(
				'group' => 'bib',
				'id'	=> ' ai-zotero',
				'name'	=> __( 'Zotero', 'icon-picker' ),
			),
			/**
			 * Squared icons
			 */
			array(
				'group' => 'main',
				'id'	=> ' ai-academia-square',
				'name'	=> __( 'Academia (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-acclaim-square',
				'name'	=> __( 'Acclaim (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-acm-square',
				'name'	=> __( 'ACM (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'ads',
				'id'	=> ' ai-ads-square',
				'name'	=> __( 'ADS (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'preprint',
				'id'	=> ' ai-arxiv-square',
				'name'	=> __( 'Arxiv (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'preprint',
				'id'	=> ' ai-biorxiv-square',
				'name'	=> __( 'Biorxiv (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-ceur-square',
				'name'	=> __( 'Ceur (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-courser-square',
				'name'	=> __( 'Coursera (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-dataverse-square',
				'name'	=> __( 'Dataverse (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-dblp-square',
				'name'	=> __( 'DBLP (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-depsy-square',
				'name'	=> __( 'Depsy (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-doi-square',
				'name'	=> __( 'DOI (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-dryad-square',
				'name'	=> __( 'Dryad (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-figshare-square',
				'name'	=> __( 'Figshare (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-google-scholar-square',
				'name'	=> __( 'Google Scholar (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-ieee-square',
				'name'	=> __( 'IEEE (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-impactstory-square',
				'name'	=> __( 'Impactstory (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-inspire-square',
				'name'	=> __( 'Inspire (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'bib',
				'id'	=> ' ai-mendeley-square',
				'name'	=> __( 'Mendeley (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-open-access-square',
				'name'	=> __( 'Open Access (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'bib',
				'id'	=> ' ai-orcid-square',
				'name'	=> __( 'ORCID (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-osf-square',
				'name'	=> __( 'OSF (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-overleaf-square',
				'name'	=> __( 'Overleaf (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-philpapers-square',
				'name'	=> __( 'Philpapers (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-piazza-square',
				'name'	=> __( 'Piazza (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-publons-square',
				'name'	=> __( 'Publons (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-pubmed-square',
				'name'	=> __( 'Pubmed (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-researchgate-square',
				'name'	=> __( 'ResearchGate (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'main',
				'id'	=> ' ai-scirate-square',
				'name'	=> __( 'Scirate (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'pub',
				'id'	=> ' ai-springer-square',
				'name'	=> __( 'Springer (Squared)', 'icon-picker' ),
			),
			array(
				'group' => 'bib',
				'id'	=> ' ai-zotero-square',
				'name'	=> __( 'Zotero (Squared)', 'icon-picker' ),
			),
		);

		/**
		 * Filter genericon items
		 *
		 * @since 0.1.0
		 * @param array $items Icon names.
		 */
		$items = apply_filters( 'icon_picker_ai_items', $items );

		return $items;
	}
}
