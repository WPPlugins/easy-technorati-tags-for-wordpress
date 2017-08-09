<?php
/*
Plugin Name: Easy Technorati Tags for WordPress
Plugin URI:  http://thisismyurl.com/software/web-based/wordpress-plugins/easy-technorati-tags-for-wordpress/
Description: There are a few other Technorati Tags generators for WordPress out there but I found most of them overly complicated, please read the readme file for more details.
Author: Christopher Ross
Author URI: http://thisismyurl.com
Version: 1.5.0
*/

/*  Copyright 2013  Christopher Ross  ( email : info@thisismyurl.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    ( at your option ) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* legacy function, use thisismyurl_technorati_tags() instead */
function timu_technorati_tags( $options='' ) {
	thisismyurl_technorati_tags( $options );
}

function thisismyurl_technorati_tags( $options='' ) {

	$ns_options = array(
                    'before'  => '',
                    'after' => '',
					'credit' => '1',
					'echo' => '0',
					'case' => 'lower',
					'nofollow' => '1',
					'newwindow' => '0',
                   );

	$options = explode( '&',$options );

	foreach ( $options as $option ) {

		$parts = explode( '=',$option );
		$options[$parts[0]] = $parts[1];
		$ns_options[$parts[0]] = $parts[1];

	}

    $posttags = get_the_tags();
	$technorati_tags = '';

    foreach( ( array )$posttags as $tag ) {
        $technorati_tags .= '<a href="http://technorati.com/tag/' . urlencode( $tag->name ) . '"';

		if ( '1' == $ns_options['nofollow'] )
				$technorati_tags .= ' rel="nofollow"';

		if ( '1' == $ns_options['newwindow'] )
			$technorati_tags .= ' target="_blank"';

		$technorati_tags .= '>';

		if ( 'ucfirst' == $ns_options['case'] )
			$technorati_tags .= ucfirst( $tag->name );
		elseif ('ucwords' == $ns_options['case']  )
			$technorati_tags .= ucwords( $tag->name );
		elseif ( 'upper' == $ns_options['case'] )
			$technorati_tags .= strtoupper( $tag->name );
		elseif ( 'lower' == $ns_options['case'] )
			$technorati_tags .= strtolower( $tag->name );

		$technorati_tags .= '</a>, ';
    }

	if ( substr_count( $technorati_tags, ', ' ) > 0 ) {
		$lastcomma = strrpos( $technorati_tags, ', ' );
		$technorati_tags = substr_replace( $technorati_tags, ' and ', $lastcomma, 1 );
	}

	if ( '1' == $ns_options['echo'] )
		echo $technorati_tags;
	else
		return $technorati_tags;
}
