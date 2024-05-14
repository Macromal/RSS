PGDMP                          |           rss    14.3    14.3                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    90764    rss    DATABASE     c   CREATE DATABASE rss WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Hungarian_Hungary.1250';
    DROP DATABASE rss;
                postgres    false                        3079    90781    pgcrypto 	   EXTENSION     <   CREATE EXTENSION IF NOT EXISTS pgcrypto WITH SCHEMA public;
    DROP EXTENSION pgcrypto;
                   false                       0    0    EXTENSION pgcrypto    COMMENT     <   COMMENT ON EXTENSION pgcrypto IS 'cryptographic functions';
                        false    2            �            1259    90766    feeds    TABLE     �   CREATE TABLE public.feeds (
    id integer NOT NULL,
    egyedi_azn character varying,
    leiras text,
    szoveg text,
    letrehozva date,
    link text,
    szerzo character varying,
    cim character varying,
    feltoltotte character varying
);
    DROP TABLE public.feeds;
       public         heap    postgres    false            �            1259    90765    feeds_id_seq    SEQUENCE     �   ALTER TABLE public.feeds ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.feeds_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    211            �            1259    90774    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    nev character varying,
    fsznev character varying,
    jelszo character varying,
    fsz boolean,
    admin boolean
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    90773    users_id_seq    SEQUENCE     �   ALTER TABLE public.users ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    213                      0    90766    feeds 
   TABLE DATA                 public          postgres    false    211                    0    90774    users 
   TABLE DATA                 public          postgres    false    213   �                   0    0    feeds_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.feeds_id_seq', 7, true);
          public          postgres    false    210            !           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 2, true);
          public          postgres    false    212            �           2606    90772    feeds feeds_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.feeds
    ADD CONSTRAINT feeds_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.feeds DROP CONSTRAINT feeds_pkey;
       public            postgres    false    211            �           2606    90780    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    213               i  x��V�n#7��?��]�'�8�nE6.&va;)6���8�l�4;�tn=�X�z̹@`��*�qҤ@�ޚ��@��#�HZ�L�|	��reXi%��H:x�dh�#I�֦�T����{Zǽ�hc�=���.j��m�*��������[�ݦ��d<�~�ŧ�2��ۋ�&m��vaz�e]�P�BA��_���c��1�SX6?O?e��fWi��X�0Ib�="���=0�o�݁'θ�&:����a�x�y��$W���w�^��W�S?���h�*�,�z��烘��d:N��m�+\]@z����i9G]f+*@�. ��8���G�T�rB�5�V�t$�HWX��%;+#�T2���������A@�>L�6"�����5O�s���!�ׅ�,�Kk��r{Nw�<8,��u�+���8(0�F�^9 ����g��[M-XW(l�R�+弊`���=:jr%B�\9@������|�H�V+�l/�sB�ؙ�d"�m)$p�Y����:0������
�gu`�^� �B��qO3i�'�q���qĽ���Ȥd�}�\yN�lL���^K~L�E���+^?0?-��%k��p�ǒN�T>y1Jø�x_����ڵ�D�"�.���\�V2��a.�k��w/'+���|?�g_F��H�o#��&��H��QT���������5����S��q�������}��ޣ��N�m��K��u�ૣ<�|���z;�o��wr��	�P�(��I�́}�t� a�.�{�o���h{P�	kxm��K���=��|}����y�p_�Ė��ꡃ�	��F�1����G���蝋�I�L��w����|x�y��%�|�n	/����/dF~>         D  x���AK$A���+�B#�JU%�'�fiG�n��T�R0��3�̯��-{5���C��6c��̰���ۡ<���0��l�w�3/�љ6?�I�����ޙ\�^.��C��7��ǩ�5����KGs�9�t>�ϖaN�돠��[�h]��KD��!qu�-Hi Y ԰x��VJ>I�&����)E��Z�*e��c�>&.>RҔkR����8G��c�%������ܯ�W��{i����8����@���PƖ�|��\@!]�d��CQIB�`�/Qjˮ��JR+8j� Q��){��.��	P���Z�!"hD�bӿ4V��H��m     