<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
    <xsl:for-each select="rss/channel">
    <h2>
    <xsl:element name="a">
    <xsl:attribute name="href">
      <xsl:value-of select="link"/>
    </xsl:attribute>
    <xsl:value-of select="title"/>
    </xsl:element> 
    </h2>
    </xsl:for-each>
    <ul>
    <xsl:for-each select="rss/channel/item">
    <li>
    <xsl:element name="a">
    <xsl:attribute name="href">
      <xsl:value-of select="link"/>
    </xsl:attribute>
    <xsl:value-of select="title"/>
    </xsl:element> 
    </li>
    </xsl:for-each>
    </ul>
</body>
</html>
</xsl:template>
</xsl:stylesheet>  
