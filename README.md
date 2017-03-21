# xml-data

The following URL returns an XML document containing realtime information about Bus Times from the bus stop 103381 (Supervalu Enfield).

https://data.dublinked.ie/cgi-bin/rtpi/realtimebusinformation?stopid=103381&format=xml

Write a program that can fetch this realtime xml feed for your chosen bus stop id, parses it and displays the bus times in a more readable tabular form (in a HTML perhaps) with Due Time, the Route Number, Destination, Origin and Operator clearly indicated. This page produces HTML using a google script www.enfieldonline.net/public-transport
Other stop numbers can be found here:- http://www.buseireann.ie/inner.php?id=403 

Use XML document processing tools in eclipse or some other environment to make this straightforward.
