FROM actors315/smeoa

MAINTAINER actors315 <actors315@gmail.com>
	
# 源码
COPY --chown=www-data:www-data . /data/www/

# 配置
RUN cp -rf /data/www/build/service/*.ini /etc/supervisord.d/ \
	&& cp -rf /data/www/build/nginx/*order.lingyin99.com.conf /usr/local/nginx/conf.d/ \
	&& cp -rf /data/www/build/nginx/nginx.conf /usr/local/nginx/conf/nginx.conf \
	&& rm -rf /data/www/build

WORKDIR /data/www/

CMD ["/usr/bin/supervisord","-c","/etc/supervisord.conf","--nodaemon"]