MathJax Font Update 2010-12-11

This file contains new copies of the MathJax otf web-based fonts.  They address an issue with Firefox 3.6.13 and higher, where the browser is more strict about the format of web-based fonts than it was in the past, and so would not load the MathJax TeX fonts.  These new font correct a number of problems with the internal tables that were causing Firefox to reject them.

To install the new fonts, replace the 

    MathJax/fonts/HTML-CSS/TeX/otf

directory with the otf directory contained in this archive.  That should resolve the issue with Firefox reverting to image fonts after it times out trying to load web-based fonts.

The fonts.zip archive in the SVN and GIT source code repositories for MathJax have been updated to include the new otf file as well, but contain no other changes, so if you have already installed the fonts included here, you do not need to unpack the new fonts.zip file if you get an update via SVN or GIT.