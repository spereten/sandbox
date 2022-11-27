FROM nginx:latest


EXPOSE 80
RUN rm -f /etc/nginx/nginx.conf;
RUN rm -f /etc/nginx/conf.d/default.conf

COPY ./conf.d /etc/nginx/conf.d
COPY ./nginx.conf /etc/nginx/nginx.conf


CMD ["nginx", "-g", "daemon off;"]
