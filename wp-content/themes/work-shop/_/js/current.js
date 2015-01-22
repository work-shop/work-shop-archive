$(window).load(function() {
	var cID 		= 'a90e3dfba3fe4ec88113f3e0ce0e04b3',
	    uID 		= 1196000869,
	    aTkn 		= '1196000869.467ede5.0ad5b8c9836e4fd8a072f925d6e9b964',
	    targetID 	= '#work-stage';
	    blk 		= 10,
	    at 		= 0,
	    max 		= 60,
	    doc 		= $(document);

	var f = new Instafeed({
		clientId: cID,
		accessToken: aTkn,
		get: 'user',
		userId: uID,
		sortBy: 'most-recent',
		resolution: 'thumbnail',
		limit: blk,
		mock: true,
		before: pre,
		success: act,
		error: err,
		filter: test,
		after: post
	});

	function pre() {
		if ( at == 0 ) {
			doc.trigger('feed-init', targetID);
		}
	}

	function post() {
		if ( max >= (at + blk) ) { f.next(); }
	}

	function act( recv ) {
		at += recv.data.length;
		doc.trigger( 'feed-recv', recv );
		//console.log( data );
	}

	function err( message ) {
		console.log( message );
	}

	function test( data ) {
		return (data.type !== 'video');
	}

	f.run();

});


(function ( args ) {
	var parent = undefined,
	    buckets = {},
	    doc = $(document),
	    columns = 12;

	var orbits = {};

	doc.on('feed-init', setup);
	doc.on('feed-recv', receive);
	doc.on('feed-render', render);



	function setup( event, id ) {
		parent = $( id );
		var currentRow = parent;

		if ( 0 < args.sections.length ) {

			args.sections.forEach( function ( x, i ) {
				if ( 0 == i % (columns / 2) ) {
					currentRow = $('<div/>').addClass('row').appendTo( parent );
				}

				buckets[ x ] = $('<div/>', { 'id': x })
				 	.addClass('col-sm-' + ( columns / args.sections.length ) )
					.appendTo( currentRow );
			});

		} else {
			buckets['*'] = parent;
		}

		console.log( buckets );
	}



	function receive( event, data ) {
		console.log( data.data );
		data.data.forEach( function ( x ) {
			console.log( x );
			if ( x.type == 'video' ) {


				var video = $('<video autoplay loop></video>')
					  .append('<source src="' + x.videos.standard_resolution.url + '" type="video/mp4" />');

				div = $('<div/>')
					.addClass('col-sm-2')
					.addClass('col-md-3')
					.addClass('col-xs-6')
					.append( video );


				buckets[ decide_bucket_type( x ) ].append( div );
			} else {
				var image = $('<img/>', {
					src: x.images.standard_resolution.url
				});

				div = $('<div/>')
					.addClass('col-sm-2')
					.addClass('col-md-3')
					.addClass('col-xs-6')
					.append( image );

				buckets[ decide_bucket_type( x ) ].append( div );
			}
		});
	}



	function decide_bucket_type( data ) {
		return ( args.sections.length > 0 ) ? args.sections[ Math.floor( (Math.random() * 100) % args.sections.length ) ] : "*";
	}



	function render( event, data ) {

	}


})({
	sections: [
	]
	
});

















